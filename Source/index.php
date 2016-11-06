<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Template by materialzecss.com -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <title>SWE Project Team 4</title>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/init.js"></script>
    <script src="https://use.fontawesome.com/8172e32e19.js"></script>
    <meta name="google-signin-client_id" content="975332133771-b3j764j7oo8ikir7kiocd9uoush78mv2.apps.googleusercontent.com">
</head>

<body>
    <?php include "nav.php" ?>
    <div id="loginModal" class="modal center-align">
        <div class="modal-content">
            <h3>Account Login</h3>
            <div class="g-signin2" data-onsuccess="onSignIn"></div>
            <!-- <div class="waves-effect waves-light btn-large"><i class="fa fa-github left" aria-hidden="true"></i>GitHub</div>
              <div class="waves-effect waves-light btn-large"><i class="fa fa-twitter left" aria-hidden="true"></i>Twitter</div> --></div>
    </div>
    <!-- End Modal-->
    <div id="index-banner">
        <div class="section">
            <div class="container">
                <h2 class="header center teal-text text-lighten-2">Open Community Data Exchange</h2>
                <div class="row center">
                    <nav>
                        <div class="nav-wrapper">
                            <form action="#" method="get">
                                <div class="input-field">
                                    <input id="search" type="search" required placeholder="Search Manifests">
                                    <label for="search" class="active"><i class="fa fa-search" aria-hidden="true"></i></label> <i class="fa fa-times-circle" aria-hidden="true"></i> </div>
                                <input name="searchCategory" type="radio" id="titleSearch">
                                <label class="searchLabel" for="titleSearch">Title</label>
                                <input name="searchCategory" type="radio" id="authorSearch">
                                <label class="searchLabel" for="authorSearch">Author</label>
                                <input name="searchCategory" type="radio" id="dateSearch">
                                <label class="searchLabel" for="dateSearch">Date</label>
                                <input name="searchCategory" type="radio" id="descriptionSearch">
                                <label class="searchLabel" for="descriptionSearch">Description</label>
                            </form>
                        </div>
                    </nav>
                    <br>
                    <br>
                    <br>
                    <div id="searchResults">
                        <table>
                            <thead>
                                <tr>
                                    <th data-field="title">Title</th>
                                    <th data-field="author">Author</th>
                                    <th data-field="dateCreated">Date Created</th>
                                    <th data-field="dateModified">Date Modified</th>
                                    <th data-field="comments">Comments</th>
                                    <th data-field="edit"></th>
                                    <th data-field="view"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>dataset1</td>
                                    <td>First Last</td>
                                    <td>12-10-2015</td>
                                    <td>3-1-2016</td>
                                    <td>lorem ipsum</td>
                                    <td><a>Edit</a></td>
                                    <td><a>View</a></td>
                                </tr>
                                <tr>
                                    <td>dataset2</td>
                                    <td>First Last</td>
                                    <td>12-13-2015</td>
                                    <td>3-5-2016</td>
                                    <td>lorem ipsum</td>
                                    <td><a>Edit</a></td>
                                    <td><a>View</a></td>
                                </tr>
                                <tr>
                                    <td>dataset3</td>
                                    <td>First Last</td>
                                    <td>1-10-2016</td>
                                    <td>4-8-2016</td>
                                    <td>lorem ipsum</td>
                                    <td><a>Edit</a></td>
                                    <td><a>View</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <footer class="page-footer teal">
            <div class="container">
                <div class="row">
                    <h5 class="white-text">OCDX</h5>
                    <p class="grey-text text-lighten-4">
                        The OCDX community supports an open standard for describing data about online communities, as well as the support tools and workflow patterns for researchers and data providers to share their datasets with the wider community. The OCDX community aims
                        to provide the lowest barriers to contributing/sharing data. We welcome your input, suggesting fields information for inclusion in the OCDX specification.
                    </p>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container"> © 2016 Team 4</div>
            </div>
        </footer>
</body>

</html>
