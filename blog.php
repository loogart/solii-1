<!doctype html>
<html lang="en">

<head>
    <?php include './php/head.php';?>
    <title>Solii | Blog</title>

<style type="text/css">
a.card-title { text-decoration: none; }
</style>
</head>

<body>

    <?php include './php/navbar.php';?>

    <main>
        <div class="content-area video-section">
            <div class="container p-md-5">
                <div class="row">
                    <div class="col-12 mx-auto">
                        <h1 class="my-3"><img class="logo-h1" src="./img/logomark-solii-black.svg">Solii Digest</h1>
                        <p>The latest Solii thoughts and articles.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mx-auto">
                        <div class="card-deck mb-3">
                            <div class="card">
                                <a href="./blog-page"><img class="card-img-top" src="./img/about.jpg" alt="Card image cap"></a>
                                <div class="card-body" style="background: rgba(0, 0, 0, 0.3);">
                                    <a class="card-title" href="./blog-page" >
                                        <h5 style="color: white;">Ottawa Doors Market</h5>
                                    </a>
                                    <a class="card-text" href="./blog-page">
                                        <!--<p>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>-->
                                    </a>
                                    <p class="card-text"><small class="text-muted" style="color: #ffffff !important;">June 26, 2018</small></p>
                                </div>
                            </div>
                            <!--<div class="card">
                                <a href="./blog-page"><img class="card-img-top" src="./img/featurette-2.jpg" alt="Card image cap"></a>
                                <div class="card-body">
                                    <a class="card-title" href="./blog-page">
                                        <h5>Modern is the New Orange</h5>
                                    </a>
                                    <a class="card-text" href="./blog-page">
                                        <p>This card has supporting text below as a natural lead-in to additional content.</p>
                                    </a>
                                    <p class="card-text"><small class="text-muted">June 22, 2018</small></p>
                                </div>
                            </div>-->
                        </div>
                        
                    </div>
                    <!--<div class="col-12 text-center mx-auto my-3">
                        <div class="btn-group" role="group" aria-label="pagination">
                            <button type="button" class="btn btn-outline-dark"><i class="fa fa-arrow-left"></i> Newer</button>
                            <button type="button" class="btn btn-outline-secondary">Older <i class="fa fa-arrow-right"></i></button>
                        </div>
                    </div>
                    -->
                </div>

            </div>
        </div>
    </main>

    <?php include './php/footer.php';?>

</body>

</html>
