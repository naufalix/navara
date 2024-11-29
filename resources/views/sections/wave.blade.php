<style>

  #wave {
    background-color: #3B71CA;
    /* background-color: darkgreen; */
    margin-top: -80px;
  }
  .waves {
    width: 100%;
    height: 80px;
    /* margin-top: -70px; */
    position: absolute;
    left: 0;
    bottom: 100px;
    right: 0;
    z-index: 3;
  }
  
  #wave .wave1 use {
    animation: move-forever1 10s linear infinite;
    animation-delay: -2s;
    fill: #3B71CA;
    opacity: 0.6;
  }
  
  #wave .wave2 use {
    animation: move-forever2 8s linear infinite;
    animation-delay: -2s;
    fill: #3B71CA;
    opacity: 0.4;
  }
  
  #wave .wave3 use {
    animation: move-forever3 6s linear infinite;
    animation-delay: -2s;
    fill: #3B71CA;
  }
  
  @keyframes move-forever1 {
    0% {transform: translate(85px, 0%);}
    100% {transform: translate(-90px, 0%);}
  }
  @keyframes move-forever2 {
    0% {transform: translate(-90px, 0%);}
    100% {transform: translate(85px, 0%);}
  }
  @keyframes move-forever3 {
    0% {transform: translate(-90px, 0%);}
    100% {transform: translate(85px, 0%);}
  }
  @keyframes up-down {
    0% {transform: translateY(10px);}
    100% {transform: translateY(-10px);}
  }
  
  </style>
  
  <section id="wave" class="py-0">
  
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3"></use>
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0"></use>
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9"></use>
      </g>
    </svg>

    <div style="height: 100px; background-color: #3B71CA">

    </div>

  </section>