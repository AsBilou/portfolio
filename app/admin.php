<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Bilou
 * Date: 06/03/13
 * Time: 11:04
 * To change this template use File | Settings | File Templates.
 */

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Validator\Constraints as Assert;


$app->boot();

$app->get('/login', function(Request $request) use ($app) {
    return $app['twig']->render('template/admin/login.twig', array(
        'error'         => $app['security.last_error']($request),
        'last_username' => $app['session']->get('_security.last_username'),
    ));
});

$app->get('/admin', function () use ($app) {
    $nbEtudes = PortfolioEtudeQuery::create()->count();
    $nbDiplomes = PortfolioDiplomeQuery::create()->count();
    $nbCompanies = PortfolioCompanyQuery::create()->count();
    $nbSkills = PortfolioSkillsQuery::create()->count();
    $nbFormations = PortfolioFormationQuery::create()->count();
    $nbInterests = PortfolioInterestQuery::create()->count();
    $nbSites = PortfolioArticleQuery::create()->filterByCategorie(1)->count();
    $nbApplications = PortfolioArticleQuery::create()->filterByCategorie(2)->count();
    $nbProjets = PortfolioArticleQuery::create()->filterByCategorie(3)->count();

    return $app['twig']->render('template/admin/index.twig', array(
        'nbEtudes'=>$nbEtudes,
        'nbDiplomes'=>$nbDiplomes,
        'nbCompanies'=>$nbCompanies,
        'nbSkills'=>$nbSkills,
        'nbFormations'=>$nbFormations,
        'nbInterests'=>$nbInterests,
        'nbSites'=>$nbSites,
        'nbApplications'=>$nbApplications,
        'nbProjets'=>$nbProjets,

    ));

})->bind('admin');

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

    $studie = PortfolioEtudeQuery::create()
        ->filterById($id)
        ->findOne();

    if($studie){
        $studie->delete();
        return $app->redirect($app['url_generator']->generate('admin_ok'));
    }
    else{

        return $app->redirect($app['url_generator']->generate('admin_ko'));
    }
});

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
        'attr'=>array('class'=>'span10','rows'=>'15'),
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
        'attr'=>array('class'=>'span10','rows'=>'15'),
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
        'attr'=>array('class'=>'span10','rows'=>'15'),
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

$app->get('/admin/sites', function () use ($app) {
    $sites = PortfolioArticleQuery::create()->filterByCategorie(1)->orderById()->find();

    return $app['twig']->render('template/admin/sites.twig', array(
        'sites'=>$sites,
    ));

})->bind('admin_sites');








$app->match('/admin/sites/add', function (Request $request) use ($app) {
    //Recupere le contenu du dossier contenant les images du carousel
    $MyDirectory = opendir('../files/img/contenus/') or die('Erreur');
    $arrayPictures = array();
    while($Entry = readdir($MyDirectory)) {
        if($Entry != '.' && $Entry != '..' && $Entry != '.DS_Store' && !is_dir($MyDirectory.$Entry)){
            array_push($arrayPictures,$Entry);
        }
    }

    $MyDirectory = opendir('../files/pdf/') or die('Erreur');
    $arrayPdf = array();
    while($Entry = readdir($MyDirectory)) {
        if($Entry != '.' && $Entry != '..' && $Entry != '.DS_Store' && !is_dir($MyDirectory.$Entry)){
            array_push($arrayPdf,$Entry);
        }
    }

    $form = $app['form.factory']->createBuilder('form')
        ->add('nom','text',array(
        'label'=>'Nom du site',
        'required'=>true,
        'attr'=>array('class'=>'','placeholder'=>'Portfolio'),
        'constraints'=>array(
            new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
        )
    ))
        ->add('type','text',array(
        'label'=>'Type',
        'required'=>true,
        'attr'=>array('class'=>'','placeholder'=>'Communautaire'),
        'constraints'=>array(
            new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
        )
    ))
        ->add('language','text',array(
        'label'=>'Langage utilisé',
        'required'=>true,
        'attr'=>array('class'=>'','placeholder'=>'PHP'),
        'constraints'=>array(
            new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
        )
    ))
        ->add('materiel','text',array(
        'label'=>'Matériel nécessaire',
        'required'=>true,
        'attr'=>array('class'=>'','placeholder'=>'Serveur web'),
        'constraints'=>array(
            new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
        )
    ))
        ->add('description','textarea',array(
            'label'=>'Description',
            'required'=>true,
            'attr'=>array('class'=>'span10','rows'=>'15'),
            'constraints'=>array(
                new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
            )
        ))
        ->add('access','text',array(
        'label'=>'Url d\'accès',
        'required'=>false,
        'attr'=>array('class'=>'','placeholder'=>'/sport'),
        'constraints'=>array(
            new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
        )
    ))
        ->getForm();

    if('POST'==$request->getMethod()){
        //recuperation des images selectionnées et envoyées en POST
        $selectedPicture = $_POST['e1'];
        $selectedPdf = $_POST['e2'];

        print_r($selectedPicture);
        print_r($selectedPdf);
        print_r($_POST);

        $form->bind($request);
        if($form->isValid()){
            $data = $form->getData();



            //return $app->redirect($app['url_generator']->generate('admin_ok'));
        }
    }

    return $app['twig']->render('template/admin/sites_add.twig', array(
        'form'=>$form->createView(),
        'pictures'=>$arrayPictures,
        'pdfs'=>$arrayPdf,
    ));

})->bind('admin_sites_add');

$app->get('/admin/sites/delete/{id}', function ($id) use ($app) {

    $sites = PortfolioArticleQuery::create()->filterById($id)->filterByCategorie(1)->findOne();

    if($sites){
        $sites->delete();
        return $app->redirect($app['url_generator']->generate('admin_ok'));
    }
    else{
        return $app->redirect($app['url_generator']->generate('admin_ko'));
    }
});

$app->get('/admin/sites/edit/{id}', function ($id) use ($app) {

    $sites = PortfolioArticleQuery::create()->filterById($id)->filterByCategorie(1)->findOne();

    if($sites){
        //$sites->delete();
        return $app->redirect($app['url_generator']->generate('admin_ok'));
    }
    else{
        return $app->redirect($app['url_generator']->generate('admin_ko'));
    }
});








$app->match('/admin/users/add', function (Request $request) use ($app) {

    //Création du token de l'utilisateur
    $token = $app['security']->getToken();
    if (null !== $token) {
        $user = $token->getUser();
    }

    $form = $app['form.factory']->createBuilder('form')
        ->add('login','text',array(
        'label'=>'Identifiant',
        'required'=>true,
        'attr'=>array('class'=>'','placeholder'=>'Admin'),
        'constraints'=>array(
            new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
        )
    ))
        ->add('email','text',array(
        'label'=>'Adresse mail',
        'required'=>true,
        'attr'=>array('class'=>'','placeholder'=>'pierre@pierre.fr'),
        'constraints'=>array(
            new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
        )
    ))
        ->add('password','password',array(
        'label'=>'Langage utilisé',
        'required'=>true,
        'attr'=>array('class'=>'','placeholder'=>'Mot de passe'),
        'constraints'=>array(
            new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
        )
    ))
        ->add('verif_pass','password',array(
        'label'=>'Vérification',
        'required'=>true,
        'attr' => array('placeholder' => 'Vérification'),
        'constraints'=>array(
            new Assert\NotBlank(array('message' => 'Don\'t leave blank')),
        )
    ))
        ->getForm();

    if('POST'==$request->getMethod()){

        $form->bind($request);

        if($form->isValid()){
            $data = $form->getData();
            if($data['password']==$data['verif_pass']){
                // find the encoder for a UserInterface instance
                $encoder = $app['security.encoder_factory']->getEncoder($user);
                // compute the encoded password for foo
                $password = $encoder->encodePassword($data['password'], $user->getSalt());
                //Création d'un nouvel utilisateur
                $admin = new PortfolioAdmin();
                $admin->setLogin($data['login']);
                $admin->setEmail($data['email']);
                $admin->setPassword($password);
                $role = array();
                array_push($role,"ROLE_ADMIN");
                $serializeData = serialize($role);
                $admin->setRole($serializeData);
                $admin->save();

                return $app->redirect($app['url_generator']->generate('admin_ok'));
            }
            return $app->redirect($app['url_generator']->generate('admin_ko'));
        }
    }

    return $app['twig']->render('template/admin/users_add.twig', array(
        'form'=>$form->createView(),
    ));

})->bind('admin_users_add');



$app->get('/admin/ok', function() use ($app){
    return $app['twig']->render('template/admin/ok.twig', array(
    ));
})->bind('admin_ok');

$app->get('/admin/ko', function() use ($app){
    return $app['twig']->render('template/admin/ko.twig', array(
    ));
})->bind('admin_ko');


$app->error(function (\Exception $e, $code) use ($app) {
    if($app['debug']) {
        return;
    }
    switch ($code) {
        case 404:
            //return $app->redirect($app['url_generator']->generate('404'));
            return new Response( $app['twig']->render('template/404.twig'), 404);
            break;
        default:
            $message = 'We are sorry, but something went terribly wrong.';
    }

    return new Response($message);
});

return $app;

?>