import SwitchOff from '../../audio/switch-off.mp3';
import SwitchOn from '../../audio/switch-on.mp3';

export default {
  data: {
    isDark: false,
    hover: false,
    timeout: null,
  },

  watch: {
    isDark (dark) {
      if (!dark) {
        this.hover = false;
        window.clearTimeout(this.timeout);
      }
      this.handleMouseEnter();
    },
  },

  mounted () {
    const storedTheme = localStorage.getItem('theme') ? localStorage.getItem('theme') : null;
    const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)');
    let isDark = storedTheme ? storedTheme === 'dark' : prefersDarkScheme.matches;
    this.setTheme(isDark, true);

    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
      if (!storedTheme) this.setTheme(e.matches, true);
    });
  },

  methods: {
    toggleDark () {
      this.setTheme(!this.isDark);
      const sound = this.isDark ? SwitchOff : SwitchOn;
      var audio = new Audio(sound);
      audio.play();
    },

    setTheme (isDark, doNotStore = false) {
      this.isDark = isDark
      const theme = isDark ? 'dark' : 'light'
      if (!doNotStore) localStorage.setItem('theme', theme)
      document.documentElement.setAttribute('data-theme', theme)
    },

    handleMouseEnter () {
      if (this.isDark && !this.hover) {
        this.hover = true;
        this.timeout = window.setTimeout(() => {
          this.hover = false;
        }, 2100);
      }
    },
  },

  beforeDestroy () {
    window.clearTimeout(this.timeout);
  },
}
