<?= $this->extend('private_layout') ?>
<?= $this->section('content')?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-dark table-hover">
                    <thead>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($users as $user):?>
                        <tr>
                            <td><?=$user['username']?></td>
                            <td><?=$user['email']?></td>
                            <td><?=$user['password']?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?= $this->endSection()?>