require('@babel/register')({
  extensions: ['.tsx', '.ts', '.jsx', '.js'],
})
const render = require('./SSR/Render.tsx').default
const file = process.argv[2]
console.log(render(file))
