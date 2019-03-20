import React from 'react'
import { renderToString } from 'react-dom/server'

export default function render () {
  const output = renderToString(<p>This is a Test!</p>)
  return output
}
