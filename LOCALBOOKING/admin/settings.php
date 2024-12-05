<?php
require('inc/essentials.php');
adminLogin();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Panel - Dashboard</title>
        <?php require('inc/links.php');?>
    </head>
    <body class="bg-white">

    <?php require('inc/header.php');?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overlflow-didden">
                <h3 class="mb-4 ">SETTINGS</h3>
                <!-- Getting Settings General Section -->

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="card-title m-0">General Settings</h5>
                        <button type="button" class="btn btn-dark shadow-none btn-san" data-bs-toggle="modal" data-bs-target="#general-s"><i class="bi bi-pencil-square"></i>Edit</button>
                        </div>
                        <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                        <p class="card-text">Content</p>
                        <h6 class="card-subtitle mb-1 fw-bold">About us</h6>
                        <p class="card-text">Content</p>
                    </div>
                </div>

                <!-- General Settings Modal -->
                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Site Title</label>
                                        <input type="text" name="site-title" class="form-control shadow-none">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">About us</label>
                                        <textarea name="site_about" class="form-control shadow-none" rows="6"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn custom-bg text-white text-white shadow-none">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php require('inc/scripts.php'); ?>

    <script>
        let general_data;
        
        function get_general(){
            let site_title;
            let site_about;

            let xhr = new XMLHttpRequest();
            xhr.open("POST" , "ajax/settings_crud.php". true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function(){
                general_data = this.responseText;
                console.log(general_data);
            }

            xhr.send('get_general');
        }

        window.onload = function(){
            get_general();
        }

    </script>

    </body>

</html>