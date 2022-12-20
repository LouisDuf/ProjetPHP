<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Paramètres</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
            require("navbar.php")
        ?>

        <div class="container-xxl">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Paramètre</th>
                        <th scope="col">Old Value</th>
                        <th scope="col">New Value</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <form action="" method="post">
                            <th scope="row">Nombre de News par page</th>
                            <td>
                                <?php
                                if (isset($nbFluxParPage)) {
                                    echo $nbFluxParPage;
                                }
                                else {
                                    echo 'Unknown';
                                }
                                ?>
                            </td>
                            <td>
                                <input type="text" class="form-control" placeholder="Value" name="nbNewsParPage" required="required"/>
                            </td>
                            <td>
                                <button class="btn btn-primary" type="submit">Valider</button>
                            </td>
                        </form>
                    </tr>
                    <tr>
                        <form>
                            <th scope="row">Nombre de flux par page</th>
                            <td>
                                <?php
                                if (isset($nbFluxParPage)) {
                                    echo $nbFluxParPage;
                                }
                                else {
                                    echo 'Unknown';
                                }
                                ?>
                            </td>
                            <td>
                                <input type="text" class="form-control" placeholder="Value" name="nbFluxParPage" required="required"/>
                            </td>
                            <td>
                                <button class="btn btn-primary" type="submit">Valider</button>
                            </td>
                        </form>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>