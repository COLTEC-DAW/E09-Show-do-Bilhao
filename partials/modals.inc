<?php  ?>

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="" action="../controllers/login.php" method="post">
                    <div class="form-group">
                        <label for="username">Usuário:</label>
                        <input type="text" class="form-control" id="username" name="user" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Senha:</label>
                        <input type="password" class="form-control" id="password" name="pass" required>
                    </div>
                    <input class="btn btn-primary" type="submit" value="Entrar">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="signup-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Criar conta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="form-group">
                    <label for="user">Usuário:</label>
                    <input type="text" class="form-control" id="user" required>
                </div>
                <div class="form-group">
                    <label for="pass">Senha:</label>
                    <input type="password" class="form-control" id="pass" required>
                </div>
                <div class="form-group">
                    <label for="confirm">Confirmar senha:</label>
                    <input type="password" class="form-control" id="confirm" required>
                </div>
                <button class="btn btn-primary" id="btn-signup">Criar</button>
            </div>
        </div>
    </div>
</div>