<?php

class SiteController extends Controller
{
    public function actions()
    {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }
	public function actionIndex() {
		if (Yii::app()->user-> isGuest) {
			$this->redirect('site/login');
		}
		$this->page['title']='Home';
		$this->page['description']='deskripsi';
		$this->page['keywords']='keywords';
		$this->render('index');
	}
    
    public function actionError()
    {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact()
    {
    	$this->title='Home';
    	$this->buildNavs();
    	$this->layout = '//layouts/main';
    	
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $headers = "From: {$model->email}\r\nReply-To: {$model->email}";
                mail(Yii::app()->params['adminEmail'], $model->subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', '<strong>Message sent!   </strong>Thank you for contacting us. We will respond to you as soon as possible.');

                $this->refresh();

            }
        }
        $this->render('contact', array('model' => $model));
    }


    
    public function actionLogin()
    {
    	$this->layout = '//layouts/main1';
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login()) {
                Yii::app()->user->setFlash('success', '<strong>Logged In!</strong>');
                $this->redirect(Yii::app()->user->returnUrl);
            }
        }
        // display the login form

        if (!empty($_POST['LoginForm'])) {
            Yii::app()->user->setFlash('error', '<strong>Not Logged In.</strong>Wrong Credentials.');
        }
        $this->render('login', array('model' => $model));

    }
    
    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }
    public function actionProduct($id,$s)
    {
    	$m=Category::model()->findByPk((int)$id);
    	if ($m!=null) {
    		$ps=new CActiveDataProvider('Product', array('pagination' => array (
                            'pageSize' => 12
                  )));
	    	$this->render('product', array('m'=>$m, 'ps'=>$ps));
    	}
    }
    public function actionAll(){
    	$this->render('all');
    }
    public function actionOne()
    {
    	$this->render('one');
    }
    public function actionItem($id,$s)
    {
    	$p=Product::model()->findByPk((int)$id);
    	if ($p!=null) {
    		$this->render('item', array('p'=>$p));
    	}else{
    		$this->redirect(Yii::app()->homeUrl);
    	}
    }
    
    


    


    
}