import React, { Fragment } from 'react'
import { renderToString } from 'react-dom/server'

export default function render (component): string {
  const output = renderToString(React.createElement(component))
  return output
}
