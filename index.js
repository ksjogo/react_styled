require('@babel/register')({
  extensions: ['.tsx', '.ts', '.jsx', '.js'],
})
const render = require('./SSR/Render.tsx').default
const file = process.argv[2] || './SSR/example.tsx'
const children = require(file).default
console.log(render(children))
