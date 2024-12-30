<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">
    <title>Menthrid - Welcome</title>
</head>
<?php include 'includes/header_front.php'; ?>
<body>

    <div class="content-wrapper">
        <video autoplay muted loop id="background-video" class="video-bg">
            <source src="assets/menthrid-video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="content">
            <h1>Welcome to Menthrid</h1>
            <button id="getStartedBtn" class="btn btn-primary">Get Started</button>
        </div>

        <button id="sound-toggle" class="sound-toggle">🔇</button>
    </div>

    <?php include 'includes/footer_front.php'; ?>

    <!-- Modal Login -->
    <div class="modal fade" id="loginMemberModal" tabindex="-1" role="dialog" aria-labelledby="loginMemberModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginMemberModalLabel">Member Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="admin/login_process.php" method="POST">
                    <input type="hidden" name="role" value="member">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="login-username-member">Username</label>
                            <input type="text" class="form-control" id="login-username-member" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="login-password-member">Password</label>
                            <input type="password" class="form-control" id="login-password-member" name="password" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
                <p class="mt-3 text-center">Don't have an Account? <a href="#" data-toggle="modal" data-target="#signupMemberModal" data-dismiss="modal">Register here!</a></p>
            </div>
        </div>
    </div>

    <!-- Modal Register -->
    <div class="modal fade" id="signupMemberModal" tabindex="-1" role="dialog" aria-labelledby="signupMemberModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signupMemberModalLabel">Sign Up</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="admin/register_process.php" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="signup-username">Username</label>
                            <input type="text" class="form-control" id="signup-username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="signup-email">Email</label>
                            <input type="email" class="form-control" id="signup-email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="signup-password">Password</label>
                            <input type="password" class="form-control" id="signup-password" name="password" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </div>
                </form>
                <p class="mt-3 text-center">Do you have an Account? <a href="#" data-toggle="modal" data-target="#loginMemberModal" data-dismiss="modal">Login here!</a></p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let video = document.getElementById('background-video');
            let soundToggle = document.getElementById('sound-toggle');

            soundToggle.addEventListener('click', function() {
                if (video.muted) {
                    video.muted = false;
                    soundToggle.textContent = '🔊';
                } else {
                    video.muted = true;
                    soundToggle.textContent = '🔇';
                }
            });

            document.getElementById('getStartedBtn').addEventListener('click', function() {
                $('#loginMemberModal').modal('show');
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
