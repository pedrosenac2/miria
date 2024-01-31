<!DOCTYPE html>
<html>
<head>
    <title>Exemplo do "Curso 1"</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .content {
            margin: 0 auto;
            width: 80%;
            background-color: #051933;
            background-repeat: no-repeat;
            background-size: 200%;
            padding-bottom: 3em;
            position: relative;
            overflow-x: hidden;
        }
        .video {
            width: 100%;
            height: 315px;
            background: #ddd;
            margin-bottom: 20px;
        }
        .assignments {
            margin-top: 20px;
        }

        .container{
            position: relative;
            z-index: 5;
        }

        .lk{
            border: 1px solid #2A7AE4;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            background-color: #2A7AE4;
            color: white;
            text-transform: uppercase;
            font-size: .9375rem;
            font-weight: 600;
            text-align: center;
            border-radius: 23px;
            height: 50px;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            margin: 4.5rem 0;
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
            text-decoration: none;
            box-shadow: 0 0 0 0 rgb(38 94 142 / 20%);
        }
        
        .vd{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        .curso_title{
            margin-top: 4rem;
            color: #051933;
            margin-bottom: 2rem;
            font-size: 1.4375rem;
            font-weight: 700;
        }
        
        .list{
            color: #051933;
            font-size: 1rem;
            margin-left: 1rem;
        }

    </style>
</head>
<body>
    <div class="content">

        <div class="container">
            <div class="spam">
                Curso
            </div>
            <h1 class='titulo'>
                Gestão dos Negócios (Exemplo)
            </h1>
            <p class='conteudo'>
                Governar, agilidade e mais
            </p>

            <a href="#" class="lk">
                Quero Comprar o curso
            </a>
        </div>

        <div class="curso-vd">
            <p class="intro">
                Introdução
            </p>

            <div class="vd">
                <!-- video aqui -->
            </div>
        </div>

    </div>

    <section class="container">
        <div class="curso-container">
            <div class="conteudo-curso">
                <h2 class="curso_title">
                    Neste Curso terá conceitos de:
                </h2>

                <ul class="list">
                    <li class="list-ul">Lorem ipsum dolor sit amet</li>
                    <li class="list-ul">Lorem ipsum dolor sit amet</li>
                    <li class="list-ul">Lorem ipsum dolor sit amet</li>
                    <li class="list-ul">Lorem ipsum dolor sit amet</li>
                    <li class="list-ul">Lorem ipsum dolor sit amet</li>
                </ul>


                <div class="info">
                    <h2 class="curso_title">
                        Para quem é este curso...
                    </h2>

                    <p class="sobre">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
                    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>

                </div>

                <div class="elementos-curso">
                    <h2>Sobre a Apresentação</h2>
                    
                    <div class="vd">
                        <!-- video de apresentação do curso -->
                    </div>

                    <p>
                        Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, 
                        e vem sendo utilizado desde o século XVI, 
                        quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. 
                        Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. 
                        Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, 
                        e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
                    </p>
                    
                    <p>
                        Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, 
                        e vem sendo utilizado desde o século XVI, 
                        quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. 
                        Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. 
                        Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, 
                        e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
                    </p>
                    <p>
                        Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, 
                        e vem sendo utilizado desde o século XVI, 
                        quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. 
                        Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. 
                        Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, 
                        e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
                    </p>
            
            
            
                </div>
            </div>
        </div>
    </section>
    </body>
</html>