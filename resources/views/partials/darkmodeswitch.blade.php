<div id="dark-mode-switch{{ isset($append) ? $append : '' }}" class="dark-mode-switch ml-auto">
  <button
    v-on:click="toggleDark"
    v-on:mouseenter="handleMouseEnter"
    v-bind:class="{
      'is-dark': isDark,
      'is-hovering': hover
    }"
    v-bind:aria-pressed="isDark ? 'true' : 'false'"
    v-bind:aria-title="isDark ? 'Desactive mode nit' : 'Activa mode nit'">
    <svg version="1.1" x="0px" y="0px" viewBox="0 0 255.48 182.97" style="overflow:visible">
      <g class="careta">
        <path class="careta-bg" d="M229.86,168.45H146.7c-6.19,0-11.21-5.02-11.21-11.21V74.08c0-6.19,5.02-11.21,11.21-11.21h83.16
          c6.19,0,11.21,5.02,11.21,11.21v83.16C241.07,163.43,236.05,168.45,229.86,168.45z"/>
          <g>
            <path class="careta-open" d="M221.62,124.98l4.09,5.24c-10.66,8.84-22.7,13.39-37.44,13.39c-14.73,0-26.78-4.55-37.44-13.39l4.09-5.24
              c10.56,7.53,19.22,10.98,33.34,10.98S211.06,132.5,221.62,124.98"/>
            <path class="careta-open" d="M170.54,93.03h11.72v11.2h-10.79c-6.76,0-11.18-1.65-14.05-8.17l4.5-2.59c2.02,4.15,4.51,5.11,8.62,5.11V93.03
              z"/>
            <rect x="198.19" y="93.03" class="careta-open" width="11.72" height="11.19"/>
          </g>
          <g>
            <path class="careta-close" d="M221.62,124.98l4.09,5.24c-10.66,8.84-22.7,13.39-37.44,13.39c-14.73,0-26.78-4.55-37.44-13.39l4.09-5.24
              c10.56,7.53,19.22,10.98,33.34,10.98S211.06,132.5,221.62,124.98"/>
            <path class="careta-close" d="M170.54,93.03h11.72v11.2h-10.79c-6.76,0-11.18-1.65-14.05-8.17l4.5-2.59c2.02,4.15,4.51,5.11,8.62,5.11V93.03
              z"/>
            <path class="careta-close" d="M202.4,93.03h11.72v11.2h-10.79c-6.76,0-11.18-1.65-14.05-8.17l4.5-2.59c2.02,4.15,4.51,5.11,8.62,5.11V93.03z
              "/>
          </g>
      </g>
      <g>
        <path class="zzz z1" d="M72.61,53.79l9.3-20.34l-10.74,1.63l-0.82-5.39l20.33-3.08l0.12,0.78l-9.26,20.33l11.6-1.76l0.82,5.39
          l-21.24,3.22L72.61,53.79z"/>
      </g>
      <g>
        <path class="zzz z2" d="M97.5,37.98l10.55-19.72l-10.82,0.95l-0.48-5.43l20.48-1.81l0.07,0.78L106.8,32.47l11.69-1.03l0.48,5.43
          l-21.4,1.89L97.5,37.98z"/>
      </g>
      <g>
        <path class="zzz z3" d="M122.69,24.17l12.24-18.71h-10.86V0h20.56v0.79l-12.2,18.71h11.74v5.45h-21.48V24.17z"/>
      </g>
    </svg>
  </button>
</div>
