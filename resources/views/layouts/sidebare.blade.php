<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link rel="stylesheet" href="{{asset('css/accueil.css')}}">
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="offcanvas offcanvas-start sidebare" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header">
            <div class="offcanvas-title">
                <img src="{{asset('img/logo_mbd.png')}}">
            </div>
            <button type="button" class="btn-close close-coix" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
           <div class="row p-3">
                <div class="col-1">
                    <span class="iconify" data-icon="ic:round-dashboard" style="color: white;" data-width="30" data-height="30"></span>
                </div>
                <div class="col-8 sidebar-link">
                    Tableau de bord
                </div>
            </div>
            <div class="row p-3">
                <div class="col-1">
                    <span class="iconify" data-icon="ic:outline-production-quantity-limits" style="color: white;" data-width="30" data-height="30"></span>                
                    </div>
                <div class="col-8 sidebar-link">
                    Produit
                </div>
            </div>
            <div class="row p-3">
                <div class="col-1">
                    <span class="iconify" data-icon="eos-icons:product-classes-outlined" style="color: white;" data-width="30" data-height="30"></span>            
                </div>    
                <div class="col-8 sidebar-link">
                    Stock
                </div>
            </div>
             <div class="row p-3">
                <div class="col-1">
                    <span class="iconify" data-icon="clarity:thin-client-line" style="color: white;" data-width="30" data-height="30"></span>                </div>    
                <div class="col-8 sidebar-link">
                    Client
                </div>
            </div>
            <div class="row p-3">
                <div class="col-1">
                    <span class="iconify" data-icon="emojione-monotone:family-man-man-boy-boy" style="color: white;" data-width="30" data-height="30"></span>
                </div>
                <div class="col-8 sidebar-link">
                    Fournisseurs
                </div>
            </div>
            <div class="row p-3">
                <div class="col-1">
                    <span class="iconify" data-icon="icon-park-outline:transaction-order" style="color: white;" data-width="30" data-height="30"></span>
                </div>
                <div class="col-8 sidebar-link">
                    Commandes
                </div>
            </div>
            <div class="row p-3">
                <div class="col-1">
                    <span class="iconify" data-icon="medical-icon:i-billing" style="color: white;" data-width="30" data-height="30"></span>
                </div>
                <div class="col-8 sidebar-link">
                    Facturation
                </div>
            </div>
        </div>
    </div>
</body>
</body>
</html>
