<?PHP

//print_r($data); 

include '../app/views/header/header.php';
?>

<style>
header
{
    background-image: url(http://static.zerochan.net/Pixiv.Id.284600.full.1000242.jpg);
}
</style>

 <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Portfolio test emes</h1>
                <hr>
                <p>Start Bootstrap can help you build better websites using the Bootstrap CSS framework! Just download your template and start going, no strings attached!</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
    </header>

 <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"><?PHP echo $data[0]; ?></h2>
                    <hr class="light">
                    <p class="text-faded">About test</p>
                    <a href="#" class="btn btn-default btn-xl">Get Started!</a>
                </div>
            </div>
        </div>
    </section>


    
    


<?PHP

//print_r($data); 

include '../app/views/footer/footer.php';
?>



