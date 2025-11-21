<!doctype html>
<html>

<head>
    @include('layouts.head')
</head>

<body>

    @include ('layouts.header')

    <div id="main" class="row">
        @yield('content')
    </div>

    @include ('layouts.footer')
    <!-- Back To Top Start -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    @include ('layouts.script')
    <!--<< All JS Plugins >>-->


    <!-- FLOATING WHATSAPP BUTTON (paste before closing </body>) -->
{{-- <style>
/* ============================
   WHATSAPP FLOATING WIDGET
   ============================ */
.whatsapp-float {
  position: fixed;
  left: 22px;
  bottom: 22px;
  z-index: 1060;
  font-family: Arial, sans-serif;
}

/* Floating circle button */
.wf-btn {
  width: 64px;
  height: 64px;
  border-radius: 50%;
  background: #25D366;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 4px solid #ffffff;
  box-shadow: 0 8px 20px rgba(0,0,0,0.18);
  cursor: pointer;
  transition: 0.18s ease;
}

.wf-btn i {
  color: #fff;
  font-size: 32px;
}

.wf-btn:hover {
  transform: translateY(-4px);
  box-shadow: 0 14px 28px rgba(0,0,0,0.25);
}

/* Subtle ring glow */
.wf-ring {
  position: absolute;
  inset: -6px;
  border-radius: 50%;
  pointer-events: none;
  box-shadow: 0 0 0 4px rgba(0,85,164,0.09);
}

/* Popup card */
.wf-card {
  min-width: 260px;
  max-width: 320px;
  background: #ffffff;
  border-radius: 14px;
  padding: 18px 16px;
  margin-bottom: 12px;
  display: none;
  transform-origin: bottom left;
  box-shadow: 0 18px 45px rgba(20,32,56,0.22);
}

/* Close button */
.wf-close {
  position: absolute;
  top: 10px;
  right: 10px;
  background: transparent;
  border: 0;
  font-size: 18px;
  color: #9aa3ad;
  cursor: pointer;
}

.wf-logo-box {
  width: 150px;
  border-radius: 10px;
}

.wf-title {
  font-weight: 700;
  margin: 0;
  color: #0055A4;
  font-size: 16px;
}

.wf-sub {
  margin-top: 6px;
  font-size: 13px;
  color: #4b5563;
}

/* CTA Button – BRANDED */
.wf-cta {
  display: block;
  margin-top: 14px;
  width: 100%;
  text-align: center;
  padding: 12px 14px;
  background: linear-gradient(90deg, #0055A4, #0b6edb);
  color: #fff;
  border-radius: 10px;
  font-weight: 700;
  text-decoration: none;
  font-size: 15px;
  box-shadow: 0 10px 25px rgba(0,85,164,0.22);
  transition: 0.2s ease;
}

.wf-cta:hover {
  background: #004b94;
  box-shadow: 0 14px 28px rgba(0,85,164,0.32);
}

/* Animation */
.wf-show {
  display: block;
  animation: wfPop 0.22s ease;
}

@keyframes wfPop {
  from { transform: scale(.92); opacity: 0; }
  to { transform: scale(1); opacity: 1; }
}

/* Mobile */
@media (max-width: 520px) {
  .wf-card {
    left: 0;
    right: 0;
    max-width: calc(100% - 28px);
    margin: 0 14px 16px;
  }
}
</style>

<div class="whatsapp-float">
  
  <!-- Popup Card -->
  <div id="wfCard" class="wf-card">
    <button class="wf-close" onclick="toggleWf(false)">✕</button>

    <div style="">
      
      <div class="wf-logo-box">
        <img src="{{ asset('front/img/logo/logo.png') }}" 
             class="img-fluid">
      </div>

      <div style="flex:1;">
        <p class="wf-title">Chat with Quality Migration</p>
        <p class="wf-sub">Quick answers & free consultation — chat on WhatsApp.</p>
      </div>
    </div>

    <a id="wfCta" class="wf-cta" href="#" target="_blank">Start WhatsApp Chat</a>
  </div>

  <!-- Floating Button -->
  <div onclick="toggleWf()" role="button" title="Chat on WhatsApp">
    <div class="wf-ring"></div>
    <div class="wf-btn" id="wfBtn"><i class="fab fa-whatsapp"></i></div>
  </div>
</div>

<script>
(function(){
  const PHONE_NUMBER = "61385185858";
  const DEFAULT_MESSAGE = encodeURIComponent("Hi Quality Migration, I would like a free consultation about visas.");

  const cta = document.getElementById("wfCta");

  cta.href = "https://wa.me/" + PHONE_NUMBER + "?text=" + DEFAULT_MESSAGE;

  window.toggleWf = function(forceOpen){
    const card = document.getElementById("wfCard");

    if (typeof forceOpen === "boolean") {
      card.style.display = forceOpen ? "block" : "none";
      if (forceOpen) card.classList.add("wf-show");
      return;
    }

    if (card.style.display === "block") {
      card.style.display = "none";
    } else {
      card.style.display = "block";
      card.classList.add("wf-show");
    }
  };

  // Close when clicking outside
  document.addEventListener("click", e => {
    if (!document.querySelector(".whatsapp-float").contains(e.target)) {
      toggleWf(false);
    }
  });

})();
</script> --}}

</body>

</html>
