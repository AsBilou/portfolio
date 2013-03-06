<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Bilou
 * Date: 06/03/13
 * Time: 11:04
 * To change this template use File | Settings | File Templates.
 */

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;


$app->boot();

$app->get('/login', function(Request $request) use ($app) {
    return $app['twig']->render('template/admin/login.twig', array(
        'error'         => $app['security.last_error']($request),
        'last_username' => $app['session']->get('_security.last_username'),
    ));
});

$app->get('/admin', function () use ($app) {
    return $app['twig']->render('template/admin/index.twig', array(
    ));

});

$app->get('/admin/cv/studies', function () use ($app) {
    $studies = PortfolioEtudeQuery::create()->find();

    return $app['twig']->render('template/admin/studies.twig', array(
        'studies'=>$studies,
    ));

})->bind('CV_Studies');

$app->match('/admin/cv/studies/add', function (Request $request) use ($app) {

    $form = $app['form.factory']->createBuilder('form')
        ->add('start','integer',array(
            'label'=>'Début',
            'required'=>true,
            'attr'=>array('class'=>'','placeholder'=>'2000'),
            'constraints'=>array(
                new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
            )
        ))
        ->add('end','integer',array(
            'label'=>'Fin',
            'required'=>true,
            'attr'=>array('class'=>'','placeholder'=>'2000'),
            'constraints'=>array(
                new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
            )
        ))
        ->add('name','text',array(
            'label'=>'Formation',
            'required'=>true,
            'attr'=>array('class'=>'','placeholder'=>'BTS Informatique de Gestion'),
            'constraints'=>array(
                new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
            )
        ))
        ->add('university','text',array(
            'label'=>'Etablissement',
            'required'=>true,
            'attr'=>array('class'=>'','placeholder'=>'ITIN'),
            'constraints'=>array(
                new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
            )
        ))
        ->add('city','text',array(
            'label'=>'Ville',
            'required'=>true,
            'attr'=>array('class'=>'','placeholder'=>'Cergy'),
            'constraints'=>array(
                new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
            )
        ))
        ->add('zipCode','integer',array(
            'label'=>'Département',
            'required'=>true,
            'attr'=>array('class'=>'','placeholder'=>'95'),
            'constraints'=>array(
                new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
            )
        ))
        ->getForm();

    if('POST'==$request->getMethod()){
        $form->bind($request);
        if($form->isValid()){
            $data = $form->getData();

            $studies = new PortfolioEtude();
            $studies->setStart($data['start']);
            $studies->setEnd($data['end']);
            $studies->setName($data['name']);
            $studies->setCity($data['city']);
            $studies->setZipcode($data['zipCode']);
            $studies->setUniversity($data['university']);
            $studies->save();

            return $app->redirect($app['url_generator']->generate('admin_ok'));
        }
    }

    return $app['twig']->render('template/admin/studies_add.twig', array(
        'form'=>$form->createView(),
    ));

})->bind('CV_Add_Studies');

$app->get('/admin/cv/studies/delete/{id}', function ($id) use ($app) {

    $studie = PortfolioEtudeQuery::create()->filterById($id)->find();
    $studie->delete();

    return $app->redirect($app['url_generator']->generate('admin_ok'));

});

$app->get('/admin/cv/diplome', function () use ($app) {
    $diplomes = PortfolioDiplomeQuery::create()->find();

    return $app['twig']->render('template/admin/diplome.twig', array(
        'diplomes'=>$diplomes,
    ));

})->bind('CV_diplome');

$app->match('/admin/cv/diplome/add', function (Request $request) use ($app) {

    $form = $app['form.factory']->createBuilder('form')
        ->add('years','integer',array(
        'label'=>'Année',
        'required'=>true,
        'attr'=>array('class'=>'','placeholder'=>'2000'),
        'constraints'=>array(
            new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
        )
    ))
        ->add('name','text',array(
        'label'=>'Nom',
        'required'=>true,
        'attr'=>array('class'=>'','placeholder'=>'Bac'),
        'constraints'=>array(
            new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
        )
    ))
        ->getForm();

    if('POST'==$request->getMethod()){
        $form->bind($request);
        if($form->isValid()){
            $data = $form->getData();

            $diplome = new PortfolioDiplome();
            $diplome->setYears($data['years']);
            $diplome->setName($data['name']);
            $diplome->save();

            return $app->redirect($app['url_generator']->generate('admin_ok'));
        }
    }

    return $app['twig']->render('template/admin/diplome_add.twig', array(
        'form'=>$form->createView(),
    ));

})->bind('CV_diplome_add');

$app->get('/admin/cv/diplome/delete/{id}', function ($id) use ($app) {

    $diplome = PortfolioDiplomeQuery::create()->filterById($id)->find();
    $diplome->delete();

    return $app->redirect($app['url_generator']->generate('admin_ok'));

});

$app->get('/admin/cv/company', function () use ($app) {
    $companies = PortfolioCompanyQuery::create()->find();

    return $app['twig']->render('template/admin/company.twig', array(
        'companies'=>$companies,
    ));

})->bind('CV_company');

$app->match('/admin/cv/company/add', function (Request $request) use ($app) {

    $form = $app['form.factory']->createBuilder('form')
        ->add('start','integer',array(
        'label'=>'Début',
        'required'=>true,
        'attr'=>array('class'=>'','placeholder'=>'2000'),
        'constraints'=>array(
            new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
        )
    ))
        ->add('end','integer',array(
        'label'=>'Fin',
        'required'=>true,
        'attr'=>array('class'=>'','placeholder'=>'2000'),
        'constraints'=>array(
            new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
        )
    ))
        ->add('company','text',array(
        'label'=>'Entreprise',
        'required'=>true,
        'attr'=>array('class'=>'','placeholder'=>'Groupe Point P'),
        'constraints'=>array(
            new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
        )
    ))
        ->add('job','text',array(
        'label'=>'Métier',
        'required'=>true,
        'attr'=>array('class'=>'','placeholder'=>'Community Manager'),
        'constraints'=>array(
            new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
        )
    ))
        ->add('description','textarea',array(
        'label'=>'Description',
        'required'=>true,
        'attr'=>array('rows'=>'5','class'=>''),
        'constraints'=>array(
            new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
        )
    ))
        ->add('type','text',array(
        'label'=>'Type de contrat',
        'required'=>true,
        'attr'=>array('class'=>'','placeholder'=>'Alternance'),
        'constraints'=>array(
            new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
        )
    ))
        ->add('city','text',array(
        'label'=>'Ville',
        'required'=>true,
        'attr'=>array('class'=>'','placeholder'=>'Paris'),
        'constraints'=>array(
            new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
        )
    ))
        ->add('zipCode','integer',array(
        'label'=>'Département',
        'required'=>true,
        'attr'=>array('class'=>'','placeholder'=>'95'),
        'constraints'=>array(
            new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
        )
    ))
        ->getForm();

    if('POST'==$request->getMethod()){
        $form->bind($request);
        if($form->isValid()){
            $data = $form->getData();

            $company = new PortfolioCompany();
            $company->setStart($data['start']);
            $company->setEnd($data['end']);
            $company->setCompany($data['company']);
            $company->setJob($data['job']);
            $company->setDescription($data['description']);
            $company->setType($data['type']);
            $company->setCity($data['city']);
            $company->setZipcode($data['zipCode']);
            $company->save();

            return $app->redirect($app['url_generator']->generate('admin_ok'));
        }
    }

    return $app['twig']->render('template/admin/company_add.twig', array(
        'form'=>$form->createView(),
    ));

})->bind('CV_company_add');

$app->get('/admin/cv/company/delete/{id}', function ($id) use ($app) {

    $company = PortfolioCompanyQuery::create()->filterById($id)->find();
    $company->delete();

    return $app->redirect($app['url_generator']->generate('admin_ok'));

});

$app->get('/admin/cv/skills', function () use ($app) {
    $skills = PortfolioSkillsQuery::create()->find();

    return $app['twig']->render('template/admin/skills.twig', array(
        'skills'=>$skills,
    ));

})->bind('CV_skills');

$app->match('/admin/cv/skills/add', function (Request $request) use ($app) {

    $form = $app['form.factory']->createBuilder('form')
        ->add('type','text',array(
        'label'=>'Type',
        'required'=>true,
        'attr'=>array('class'=>'','placeholder'=>'Informatique'),
        'constraints'=>array(
            new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
        )
    ))
        ->add('description','textarea',array(
        'label'=>'Description',
        'required'=>true,
        'attr'=>array('class'=>'','rows'=>'5'),
        'constraints'=>array(
            new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
        )
    ))
        ->getForm();

    if('POST'==$request->getMethod()){
        $form->bind($request);
        if($form->isValid()){
            $data = $form->getData();

            $skill = new PortfolioSkills();
            $skill->setType($data['type']);
            $skill->setDescription($data['description']);
            $skill->save();

            return $app->redirect($app['url_generator']->generate('admin_ok'));
        }
    }

    return $app['twig']->render('template/admin/skills_add.twig', array(
        'form'=>$form->createView(),
    ));

})->bind('CV_skills_add');

$app->get('/admin/cv/skills/delete/{id}', function ($id) use ($app) {

    $skill = PortfolioSkillsQuery::create()->filterById($id)->find();
    $skill->delete();

    return $app->redirect($app['url_generator']->generate('admin_ok'));

});

$app->get('/admin/cv/formations', function () use ($app) {
    $formations = PortfolioFormationQuery::create()->find();

    return $app['twig']->render('template/admin/formations.twig', array(
        'formations'=>$formations,
    ));

})->bind('CV_formations');

$app->match('/admin/cv/formations/add', function (Request $request) use ($app) {

    $form = $app['form.factory']->createBuilder('form')
        ->add('years','integer',array(
        'label'=>'Année',
        'required'=>true,
        'attr'=>array('class'=>'','placeholder'=>'2000'),
        'constraints'=>array(
            new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
        )
    ))
        ->add('name','text',array(
        'label'=>'Nom',
        'required'=>true,
        'attr'=>array('class'=>'','placeholder'=>'BIA'),
        'constraints'=>array(
            new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
        )
    ))
        ->add('city','text',array(
        'label'=>'Ville',
        'required'=>true,
        'attr'=>array('class'=>'','placeholder'=>'Cergy'),
        'constraints'=>array(
            new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
        )
    ))
        ->add('zipCode','text',array(
        'label'=>'Département',
        'required'=>true,
        'attr'=>array('class'=>'','placeholder'=>'95'),
        'constraints'=>array(
            new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
        )
    ))
        ->getForm();

    if('POST'==$request->getMethod()){
        $form->bind($request);
        if($form->isValid()){
            $data = $form->getData();

            $formation = new PortfolioFormation();
            $formation->setYears($data['years']);
            $formation->setName($data['name']);
            $formation->setCity($data['city']);
            $formation->setZipcode($data['zipCode']);
            $formation->save();

            return $app->redirect($app['url_generator']->generate('admin_ok'));
        }
    }

    return $app['twig']->render('template/admin/formations_add.twig', array(
        'form'=>$form->createView(),
    ));

})->bind('CV_formations_add');

$app->get('/admin/cv/formations/delete/{id}', function ($id) use ($app) {

    $formation = PortfolioFormationQuery::create()->filterById($id)->find();
    $formation->delete();

    return $app->redirect($app['url_generator']->generate('admin_ok'));

});









$app->get('/admin/cv/interests', function () use ($app) {
    $interests = PortfolioInterestQuery::create()->find();

    return $app['twig']->render('template/admin/interests.twig', array(
        'interests'=>$interests,
    ));

})->bind('CV_interests');

$app->match('/admin/cv/interests/add', function (Request $request) use ($app) {

    $form = $app['form.factory']->createBuilder('form')
        ->add('type','text',array(
        'label'=>'Type',
        'required'=>true,
        'attr'=>array('class'=>'','placeholder'=>'Informatique'),
        'constraints'=>array(
            new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
        )
    ))
        ->add('description','textarea',array(
        'label'=>'Description',
        'required'=>true,
        'attr'=>array('class'=>'','rows'=>'5'),
        'constraints'=>array(
            new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
        )
    ))
        ->getForm();

    if('POST'==$request->getMethod()){
        $form->bind($request);
        if($form->isValid()){
            $data = $form->getData();

            $interest = new PortfolioInterest();
            $interest->setType($data['type']);
            $interest->setDescription($data['description']);
            $interest->save();

            return $app->redirect($app['url_generator']->generate('admin_ok'));
        }
    }

    return $app['twig']->render('template/admin/interests_add.twig', array(
        'form'=>$form->createView(),
    ));

})->bind('CV_interests_add');

$app->get('/admin/cv/interests/delete/{id}', function ($id) use ($app) {

    $skill = PortfolioSkillsQuery::create()->filterById($id)->find();
    $skill->delete();

    return $app->redirect($app['url_generator']->generate('admin_ok'));

});








$app->get('/admin/ok', function() use ($app){
    return $app['twig']->render('template/admin/ok.twig', array(
    ));
})->bind('admin_ok');

$app->get('/admin/ko', function() use ($app){
    return $app['twig']->render('template/admin/ko.twig', array(
    ));
})->bind('admin_ko');

return $app;

?>