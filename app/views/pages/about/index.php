<?PHP

//print_r($data); 

include '../app/views/header/header.php';
?>


 <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>About test emes</h1>
                <hr>
                <p>Start Bootstrap can help you build better websites using the Bootstrap CSS framework! Just download your template and start going, no strings attached!</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
    </header>

 <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6  text-center">
                    
                    
                    <p class="text-faded">Address</p>
                    <a href="<?PHP echo HOME; ?>/about/adres" class="btn btn-default btn-xl">Get Address!</a>
                </div>
                <div class="col-lg-6  text-center">
                    
                    
                    <p class="text-faded">Phone</p>
                    <a href="<?PHP echo HOME; ?>/about/phone" class="btn btn-default btn-xl">Get Phone!</a>
                </div>
            </div>
        </div>
    </section>

    


<?PHP

//print_r($data); 

include '../app/views/footer/footer.php';
?>



