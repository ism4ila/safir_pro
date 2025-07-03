<?php 
$pageTitle = "Contactez-nous - Agence SAFIR";
include('includes/header.php'); 
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="display-4">Contactez-nous</h1>
            <p class="lead">Une question ? Une demande de devis ? N'hésitez pas à nous contacter via le formulaire ci-dessous ou directement par téléphone. Notre équipe vous répondra dans les plus brefs délais.</p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-8 offset-md-2">
            <form action="#" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Votre nom complet</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Votre email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Sujet</label>
                    <input type="text" class="form-control" id="subject" name="subject" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Votre message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer le message</button>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12 text-center">
            <h2>Nos Coordonnées</h2>
            <p><strong>Adresse :</strong> Bertoua, ENIA - Immeuble SPC, avant carrefour aviation</p>
            <p><strong>Téléphone :</strong> +683 00 00 80</p>
            <p><strong>Email :</strong> safir.agence.cameroun@gmail.com</p>
        </div>
    </div>
</div>

<?php 
include('includes/footer.php'); 
?>