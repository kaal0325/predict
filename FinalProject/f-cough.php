<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>Children's Health Prediction</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="css/fullpage.min.css">

    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/templatemo-style.css">

    <link rel="stylesheet" href="css/responsive.css">

    </head>
    
    <body>
    
	<div id="video">
        <div class="preloader">
            <div class="preloader-bounce">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <header id="header">
            <div class="container-fluid">
                <div class="navbar">
                    <a href="#" id="logo" title="Elegance by TemplateMo">
                        Welcome
                    </a>
                    <div class="navigation-row">
                        <nav id="navigation">
                            <button type="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button>
                            <div class="nav-box navbar-collapse">
                                <ul class="navigation-menu nav navbar-nav navbars" id="nav">
                                <li data-menuanchor="" class="active"><a href="index.php">Home</a></li>
                                    <li data-menuanchor=""><a href="tips.php">Healthy Tips</a></li>
                                    <li data-menuanchor="slide03"><a href="possible.php">Possible Diseases</a></li>
                                    <li data-menuanchor="slide04"><a href="contact.php">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <video autoplay muted loop id="myVideo">
          <source src="images/video-bg.mp4" type="video/mp4">
        </video>

        <div id="fullpage" class="fullpage-default">

            <div class="section animated-row" data-section="slide01">
                <div class="section-inner">
                    <div class="welcome-box">
                    <?php
                    include('func.php');
                    ?>
                    <br><h3> Possible Disease </h3><br>
                    <?php 
                        if(!empty($_POST["accomp"]))
                        $symptom = $_POST["accomp"];
                        {
                            if(count($symptom)<=4)
                            {
                                echo '<h4><b>Pneumonia</b></h4>';
                                echo 'Pneumonia is an infection that inflames the air sacs in one or both lungs.<br> ';
                                echo 'The air sacs may fill with fluid or pus (purulent material), causing cough with phlegm or pus, fever, chills, and difficulty breathing. <br>';
                                echo 'Pneumonia can range in seriousness from mild to life-threatening. It is most serious for infants and young children.';
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Stick to the treatment plan by the doctor and have developed and take all medications as instructed.<br>';
                                echo '* Make sure to get plenty of rest to help the body fight the infection.<br>';
                                echo '* Drink plenty of fluids.<br>';
                                echo '* Ask the doctor when you need to schedule a follow-up appointment for your child.<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b>Asthma</b></h4>';
                                echo 'Asthma is a condition in which your airways narrow and swell and may produce extra mucus.<br> ';
                                echo 'This can make breathing difficult and trigger coughing, a whistling sound (wheezing) when you breathe out and shortness of breath. <br>';
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Know the childs triggers and avoid them.<br>';
                                echo '* Take the asthma medication as prescribed by your child’s doctor.<br>';
                                echo '* Learn how to use the inhaler properly.<br>';
                                echo '* Quit smoking and avoid second-hand smoke.<br>';
                                echo '* Keep fit by exercising.<br>';
                                echo '* Be in control, get an asthma action plan.<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b>Common cold</b></h4>';
                                echo 'The common cold is a viral infection of your nose and throat (upper respiratory tract).<br> ';
                                echo 'It is usually harmless, although it might not feel that way. <br>';
                                echo 'Many types of viruses can cause a common cold.<br><br>'; 
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Steer clear of anyone who has a cold<br>';
                                echo '* Avoid secondhand smoke<br>';
                                echo '* Wash their hands well and often, especially after blowing their noses<br>';
                                echo '* Sneeze or cough into a tissue or their elbow, not into their hands<br>';
                                echo '* Not share towels, drinking glasses, or eating utensils with someone who has a cold<br>';
                                echo '* Not pick up other peoples used tissues<br>';
                            }
                            else 
                            {
                                echo '<h4><b>Common cold</b></h4>';
                                echo 'The common cold is a viral infection of your nose and throat (upper respiratory tract).<br> ';
                                echo 'It is usually harmless, although it might not feel that way. <br>';
                                echo 'Many types of viruses can cause a common cold.<br><br>'; 
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Steer clear of anyone who has a cold<br>';
                                echo '* Avoid secondhand smoke<br>';
                                echo '* Wash their hands well and often, especially after blowing their noses<br>';
                                echo '* Sneeze or cough into a tissue or their elbow, not into their hands<br>';
                                echo '* Not share towels, drinking glasses, or eating utensils with someone who has a cold<br>';
                                echo '* Not pick up other peoples used tissues<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b>Hey Fever</b></h4>';
                                echo 'Hay fever, also called allergic rhinitis, causes cold-like signs and symptoms, such as <br> ';
                                echo ' a runny nose, itchy eyes, congestion, sneezing and sinus pressure. <br>';
                                echo 'Hay fever is caused by an allergic response to outdoor or indoor allergens, such as pollen, dust mites, or tiny flecks of skin and saliva shed.<br><br>'; 
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Keep the windows closed, use air conditioning if possible, and stay indoors when pollen/mold/weed counts are high.<br>';
                                echo '* Its also a good idea for kids with seasonal allergies to wash their hands or shower and change clothing after playing outside.<br>';
                                echo '* Medicines can help ease allergy symptoms. These may include decongestants, antihistamines, and nasal spray steroids<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
                                echo '<h4><b>Influenza(flu)</b></h4>';
                                echo 'Influenza is a viral infection that attacks your respiratory system your nose, throat and lungs.<br> ';
                                echo 'Influenza is commonly called the flu, but its not the same as stomach "flu" viruses that cause diarrhea and vomiting. <br>';
                                echo ' <h4><b>Treatment</b></h4>';
                                echo '* Avoid close contact. Avoid close contact with people who are sick.<br>';
                                echo '* Stay home when they are sick. If possible, stay home from work, school, and errands when they are sick<br>';
                                echo '* Cover their mouth and nose.<br>';
                                echo '* Clean their hands.<br>';
                                echo '* Avoid touching their eyes, nose or mouth.<br>';
                                echo '* Practice other good health habits<br>';
                                echo '<br><hr noshade size="15" color= red ><br>';
 
                            }
                        }
                    ?>
                    </div>
                </div>
            </div>		
		</div>	
	</div>
    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/fullpage.min.js"></script>

    <script src="js/scrolloverflow.js"></script>

    <script src="js/owl.carousel.min.js"></script>

    <script src="js/jquery.inview.min.js"></script>

    <script src="js/form.js"></script>

    <script src="js/custom.js"></script>



  </body>
</html>