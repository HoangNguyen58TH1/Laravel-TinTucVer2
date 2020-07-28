const express = require('express')
const cors = require('cors')
const app = express()
const port = 3000
const vntk = require('vntk')
const wordTokenizer = vntk.wordTokenizer()
const stopwords = require('vietnamese-stopwords');
const removePunctuation = require('remove-punctuation');

app.use(cors())

const categoryAI = require('./train.js')

console.log('categoryAI', categoryAI)

app.get('/', function (req, res) {
  let label
  let percent
  if (req.query.title) {
    console.log('req.query.title', req.query.title)
    let handling_strings = wordTokenizer
      .tag(removePunctuation(req.query.title)
      .replace(/-|‘|’|“|”/g, ''), 'text').toLowerCase()
      .split(' ')
      .filter(val => !stopwords.includes(val))
      .join(' ')
    console.log('handling_strings', handling_strings)

    let parse_string = handling_strings.split(' ');
    let get_number = parse_string.map(e => { if (isNaN(e) === false) { return e } });
    let filter_NaN = parse_string.filter(val => !get_number.includes(val))
    let join_element_array = filter_NaN.join(' ')
    console.log('join_element_array', join_element_array)

    let classifyResultObj = categoryAI.classify(join_element_array)
    console.log('classifyResultObj', classifyResultObj)
    if (classifyResultObj) {
      label = classifyResultObj.bestLabel;
      percent = classifyResultObj.bestChance;
    }

  }
  res.send({label, percent})
})

app.listen(port, () => console.log(`Example app listening at http://localhost:${port}`))