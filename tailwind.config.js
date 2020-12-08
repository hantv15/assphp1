module.exports = {
  future: {
    // removeDeprecatedGapUtilities: true,
    // purgeLayersByDefault: true,
  },
  purge: [],
  theme: {
    extend: {
      spacing: {
        fl: '3.25rem', // 52px
        fll: '15.75rem', // 252px
        t23: '23rem', // 368px
        t30: '30rem', // 480px
        wh5: '5.5rem',  // 88px
        h215: '21.25rem', // 340px
        h5325: '53.25rem', // 852px
        h297: '29.75rem', // 476px
        w44: '11.25rem', // 180px
        w294: '194px',  //
        h225: '22.5rem', // 360px
        w1687: '16.87rem', //269.92px
        355: '35.5rem', // 568px
        356: '35.63rem', // 570.08px
        269: '26.69rem',  // 427.04px
        570: '570px',
        427: '427px',
        r7: '7rem',
        r4: '4.5rem',
        93: '23.25rem',
      },
      textColor: {
        '3or': '#333333',
        'gray-1': '#555555',
      },
      inset: {
        '1/2': '50%'
      },
      opacity: {
        '10': '0.1',
        '20': '0.2',
        '80': '0.8',
        '81': '0.81',
        '82': '0.82',
        '83': '0.83',
        '84': '0.84',
        '85': '0.85',
        '86': '0.86',
        '87': '0.87',
        '88': '0.88',
        '89': '0.89',
        '95': '0.95',
      },
      backgroundColor: theme => ({
              'primary': '#3490dc',
              'secondary': '#ffed4a',
              'danger': '#e3342f',
              'cl1': '#f2f2f2',
              }),
    },
  },
  variants: {
    translate: ['responsive', 'hover', 'focus', 'group-hover', 'motion-safe'],
    transformOrigin: ['responsive', 'hover', 'focus', 'group-hover'],
    textColor: ['responsive', 'hover', 'focus', 'group-hover'],
    display: ['responsive', 'hover', 'focus'],
    width: ['responsive', 'hover', 'focus'],
    overflow: ['responsive', 'hover', 'focus'],
    backgroundColor: ['responsive', 'hover', 'focus', 'active', 'group-hover'],
    backgroundOpacity: ['responsive', 'hover', 'focus', 'active', 'group-hover'],
    opacity: ['responsive', 'hover', 'focus', 'active', 'group-hover'],
    inset: ['responsive', 'hover', 'focus'],
    backgroundOpacity: ['responsive', 'hover', 'focus', 'active', 'group-hover'],
  },
  plugins: [],
}
