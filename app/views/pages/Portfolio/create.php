<?PHP
include '../app/views/header/header.php';
?>

<style>
body
{
	background-color: #282828;
}

.form-control
{
	display: block;
    width: 100%;
    height: 35px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.5;
    color: #eee;
    background-color: #36333d;
    background-image: none;
    border: 1px solid #36333d;
    border-radius: 4px;
    box-shadow: inset 0 1px 1px rgba(0,0,0,0.075);
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;

}

</style>



<section id="last">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="margin-top-0 wow fadeIn">Get in Touch</h2>
                    <hr class="primary">
                    <p>We love feedback. Fill out the form below and we'll get back to you as soon as possible.</p>
                </div>
                <div class="col-lg-10 col-lg-offset-1 text-center">


                    <form action="create" method="POST" class="contact-form row">
                    <input type="hidden"  value="<?PHP echo Token::create(); ?>" name="token">
                        <div class="col-md-12">
                            <label></label>
                            <input type="text" class="form-control" placeholder="Title" name="title">
                        </div>
                        
                        <div class="col-md-12">
                            <label></label>
                            <textarea class="form-control" rows="9" placeholder="Your article  here.." name="article"></textarea>
                        </div>
                        <div class="col-md-4 col-md-offset-4">
                            <label></label>
                            <button type="submit" data-toggle="modal" data-target="#alertModal" class="btn btn-primary btn-block btn-lg">create <i class="ion-android-arrow-forward"></i></button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </section>


    <?PHP
include '../app/views/footer/footer.php';
?>
