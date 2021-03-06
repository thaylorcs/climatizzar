<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Climatizzar - Climatizadores</title>
    <script src="https://kit.fontawesome.com/3648c5f42b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-7">
                    <a href="/" class="navbar-brand"><img src="img/Climatizzar.png" alt=""></a>
                </div>
                <div class="col-md-5 justify-content-end">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">

                        <button class="navbar-toggler" type="button" data-toggle="collapse"         data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item"><a class="nav-link" href="">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#quem-somos">Quem Somos</a></li>
                            <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
                        </ul>
                        <div class="clear"></div>
                        
                    </div>        
                </nav>
                </div>
            </div>
        </div>
    
    </header>

    <div class="container-fluid clima-imagem">
        <img class="img-fluid" src="img/climabrisa_cabine.jpg" alt="">
    </div>

    <section class="container climatizacao">
        <div class="row">
            
            <div class="col-md-6">
                <h2>O que é a climatização evaporativa?</h2>
                <p>No resfriamento evaporativo o ar cede energia (calor) para que a água evapore, resultando na liberação de uma corrente de ar mais fria.</p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="img/climatizador.png" alt="">
            </div>
            
        </div>
        
    </section>
    <div class="container-fluid evaporacao">
        <h2>Benefícios da climatização evaporativa</h2>
        <div class="row">
            <ul class="lista">
                    <li><p><i class="fas fa-fan rotating"></i> Umidificação do ar</p></li>
                    <li><p><i class="fas fa-fan rotating"></i> Ventilação do ar</p></li>
                    <li><p><i class="fas fa-fan rotating"></i> Renovação do ar</p></li>
                    <li><p><i class="fas fa-fan rotating"></i> Não utiliza gases tóxicos</p></li>
                    <li><p><i class="fas fa-fan rotating"></i> Baixo consumo de energia elétrica</p></li>
                    <li><p><i class="fas fa-fan rotating"></i> Baixos níveis de ruídos</p></li>
                    <li><p><i class="fas fa-fan rotating"></i> Baixo custo de instalação</p></li>
                    <li><p><i class="fas fa-fan rotating"></i> Baixo custo de manutenção</p></li>
                    <li><p><i class="fas fa-fan rotating"></i> Fácil instalação</p></li>
                    <li><p><i class="fas fa-fan rotating"></i> Reduz a temperatura em até 12º C</p></li>
            </ul>
        </div>
    </div>
    <section class="container clientes-slider">
        <div class="center">
            <h2>Nossos clientes</h2>
            <div style="max-width: 700px;margin: 0 auto;overflow: hidden;" class="slider-container">
                <img src="img/LOGOTIPO_CCP-1024x485.png" alt="">
                <img src="img/LOGOTIPO_CCP-1024x485.png" alt="">
                <img src="img/LOGOTIPO_CCP-1024x485.png" alt="">
                <img src="img/LOGOTIPO_CCP-1024x485.png" alt="">
            </div>
        </div>
    </section>
    <section class="quem-somos container" id="quem-somos">
        <h2 class="quem-somos-titulo">Quem Somos</h2>

        <p class="quem-somos-texto"> Climatizzar é Representante da Climabrisa, fabricante dos melhores e mais bonitos Climatizadores do Brasil.
            Temos o Climatizador ideal para a sua necessidade e suprimos a demanda em Igrejas, Academias, Salões de Festas, Indústrias, Mercados e Comércio em geral. 
            Vendemos equipamentos e peças de reposição. Realizamos manutenção e limpeza, instalações e assessoria.
            Indicaremos o equipamento ideal para climatizar o seu ambiente, deixando-o com uma temperatura de conforto, ar limpo e umidificado, proporcionando um ambiente saudável e melhorando o rendimento dos seus colaboradores.</p>
    </section>
    <section class="container-fluid call-to-action" id="contato">
        <h2>Gostaria de mais informações?</h2>
        <div class="d-flex justify-content-center container">
            
            
            <div class="row">
                        
                <form action="mail.php" method="POST">
                    <div class="form-group">
                        <input name="nome" class="form-control" type="text" id="InputName" placeholder="Nome" required>
                    </div>
                    <div class="form-group">
                        <input name="email" class="form-control" type="email" id="InputEmail" placeholder="exemplo@email.com" required>
                    </div>
                    <div class="form-group">
                        <textarea name="mensagem"  class="form-control" placeholder="Digite sua mensagem aqui" id="" cols="20" rows="3" required></textarea>
                    </div>
                    <div class="submit">
                        <input type="submit" class="btn btn-primary" value="Enviar" name="submit">
                    </div>
                </form>
            </div>
                
        </div>        
    </section>
    <footer class="footer">
        <p>&copy; Climatizzar 2020. Direitos Reservados</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/slick.min.js"></script>
    <script>
        $('section.clientes-slider .slider-container').slick({
            dots: true,
            arrows: false,
            infinite: false,
            speed: 1000,
            slidesToShow: 4,
            autoplay: true,
            autoplaySpeed: 3000,
            pauseOnHover: false,
            responsive:[{
                breakpoint: 768,
                settings:{
                    slidesToShow: 2
                }
            }]
        });
    </script>
</body>
</html>