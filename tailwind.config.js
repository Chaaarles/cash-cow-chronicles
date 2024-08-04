/** @type {import('tailwindcss').Config} */
export default {
  content: [
      './resources/views/**/*.blade.php',
  ],
  theme: {
    extend: {
        colors: {
            'emerald': {
                '50': '#ebfef6',
                '100': '#cefde8',
                '200': '#a2f8d6',
                '300': '#66efc3',
                '400': '#2adda9',
                '500': '#06d6a0',
                '600': '#009f77',
                '700': '#007f63',
                '800': '#00654f',
                '900': '#025243',
                '950': '#002f26',
            },
            'eggplant': {
                '50': '#faf5f8',
                '100': '#f6edf1',
                '200': '#efdbe4',
                '300': '#e4bdcf',
                '400': '#d294af',
                '500': '#c17394',
                '600': '#ab5775',
                '700': '#92445e',
                '800': '#793b4f',
                '900': '#603140',
                '950': '#3d1a25',
            },
        }
    },
  },
  plugins: [],
}

