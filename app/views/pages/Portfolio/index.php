<?PHP
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
                    <h2 class="section-heading">About test page</h2>
                    <hr class="light">
                    <p class="text-faded">About test</p>
                    <a href="#" class="btn btn-default btn-xl">Get Started!</a>
                </div>
            </div>
        </div>
    </section>


    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">

<?PHP foreach ($data as $key => $value)
{
  
    for($i = 0;$i < 4;$i++)
    {
        if(!isset($value[$i]))
        {
            $value[$i] = NULL;
        }
    }

     ?>
            <div class="row">

            <a href="<?PHP echo HOME.'/portfolio/'.$value[0]; ?>">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond wow bounceIn text-primary"></i>
                        <h3><?PHP echo Shift::remove($value[0]); ?></h3>
                        <p class="text-muted">Our templates are updated regularly so they don't break.</p>
                    </div>
                </div>
            </a>
            <a href="<?PHP echo HOME.'/portfolio/'.$value[1]; ?>">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3><?PHP echo Shift::remove($value[1]); ?></h3>
                        <p class="text-muted">You can use this theme as is, or you can make changes!</p>
                    </div>
                </div>
            </a>
             <a href="<?PHP echo HOME.'/portfolio/'.$value[2]; ?>">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3><?PHP echo Shift::remove($value[2]); ?></h3>
                        <p class="text-muted">We update dependencies to keep things fresh.</p>
                    </div>
                </div>
            </a>
            <a href="<?PHP echo HOME.'/portfolio/'.$value[3]; ?>">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3><?PHP echo Shift::remove($value[3]); ?></h3>
                        <p class="text-muted">You have to make your websites with love these days!</p>
                    </div>
                </div>
            </a>
            </div>

    <?PHP  } ?>



        </div>
    </section>

    <div style="background:gray;padding:10px;"class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="<?PHP echo HOME.'/portfolio/create' ?>" class="btn btn-default btn-xl">Add Article!</a>
                </div>

    


<?PHP
include '../app/views/footer/footer.php';
?>



