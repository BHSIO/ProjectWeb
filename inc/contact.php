<?php
$title = 'Page de contact';
$errors = array();
$success = false;

if (!empty($_POST['submitted'])) {
    $nom = clean($_POST['nom']);
    $errors = textWalid($errors, $nom, 'nom', 3, 20);
    $prenom = clean($_POST['prenom']);
    $errors = textWalid($errors, $prenom, 'prenom', 3, 20);
    $email = clean($_POST['email']);
    $errors = emailValidation($errors, $email, 'email');
    $subject = clean($_POST['subject']);
    $message = clean($_POST['message']);
    $errors = textWalid($errors, $subject, 'subject', 5, 30);
    $message = clean($_POST['message']);
    $errors = textWalid($errors, $message, 'message', 5, 2000);
    if (count($errors) == 0) {
        // insert avec protection des injections SQL
        // requète sql pour le formulaire de contact
        $sql = "INSERT INTO contact VALUES (null,:nom,:prenom,:email,:subject,:message)";
        $query = $pdo->prepare($sql);
        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->bindValue(':subject', $subject, PDO::PARAM_STR);
        $query->bindValue(':message', $message, PDO::PARAM_STR);
        $query->execute();
        $success = true;
    }
    if (!empty($_POST['message'])) {
        $usermsg = $_POST['message'];
        $sql = "SELECT message FROM contact WHERE message = :message";
        $query = $pdo->prepare($sql);
        $query->bindValue(':message', $usermsg, PDO::PARAM_INT);
        $query->execute();
        $userinfos = $query->fetch();
        if (!empty($_SESSION['login']['id'])) {
            $userid = $_SESSION['login']['id'];
            $sql = "SELECT id FROM users WHERE id = :id";
            $query = $pdo->prepare($sql);
            $query->bindValue(':id', $userid, PDO::PARAM_INT);
            $query->execute();
            $userinfos = $query->fetch();
            if (count($errors) == 0) {
                $sql = "INSERT INTO questions VALUES (null,:id_user,:question,'')";
                $query = $pdo->prepare($sql);
                $query->bindValue(':id_user', $_SESSION['login']['id'], PDO::PARAM_STR);
                $query->bindValue(':question', $message, PDO::PARAM_STR);
                $query->execute();
                $success = true;
            }
        }
    }

}
?>
    <div id="contact"></div>

    <div class="wrap">
        <div class="contenu">
            <div class="formulaire2">
                <?php if ($success) { ?>
                    <p class="success">Merci de nous avoir contacté, nous vous renverrons un mail dans les plus
                        brefs délais</p>
                <?php } else  { ?>
                <p class="howto">Contactez nous !</p>
                <div class="backform">
                    <form action="" method="post" novalidate>
                        <label for="nom">Nom *</label>
                        <input type="text" id="nom" name="nom" value="<?php if (!empty($_POST)) {
                            echo $_POST['nom'];
                        } ?>">
                        <p class="error"><?php if (!empty($errors['nom'])) {
                                echo $errors['nom'];
                            } ?></p>
                        <label for="prenom">Prénom *</label>
                        <input type="text" id="prenom" name="prenom" value="<?php if (!empty($_POST)) {
                            echo $_POST['prenom'];
                        } ?>">
                        <p class="error"><?php if (!empty($errors['prenom'])) {
                                echo $errors['prenom'];
                            } ?></p>
                        <label for="email">Email *</label>
                        <input type="email" id="email" name="email" value="<?php if (!empty($_POST)) {
                            echo $_POST['email'];
                        } ?>">
                        <p class="error"><?php if (!empty($errors['email'])) {
                                echo $errors['email'];
                            } ?></p>
                        <label for="subject">Sujet *</label>
                        <input class="subject" type="text" id="subject" name="subject"
                               value="<?php if (!empty($_POST)) {
                                   echo $_POST['subject'];
                               } ?>">
                        <p class="error"><?php if (!empty($errors['subject'])) {
                                echo $errors['subject'];
                            } ?></p>
                        <label for="message">Question *</label>
                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                        <p class="error"><?php if (!empty($errors['message'])) {
                                echo $errors['message'];
                            } ?></p>
                        <input id="submit" type="submit" name="submitted" value="Envoyer" class="submite">
                    </form>
                </div>
            </div>
            </body>
            <?php } ?>