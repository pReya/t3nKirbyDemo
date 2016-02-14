title: Blogpost
pages: false
files: true
fields:
  title:
    label: Titel
    type: title
    required: true
  date:
    label: Datum
    type: date
    width: 1/2
    default: today
    required: true
  author:
    label: Author
    type: user
    width: 1/2
  text:
    label: Text
    type: textarea
    required: true