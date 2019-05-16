# Github Gists

## Files

* `/vendors/highlight.js`
* `/sass/componenets/_gist.scss`
* `/sass/components/_gist.syntax.scss`


## Manual Pre

Auto-detected by `highlight.js`.

HTML Escape: https://www.freeformatter.com/html-escape.html#ad-output

    <pre><code> ... code here .. </code></pre>


## A Single-File Gist

    <script src="https://gist.github.com/wcDogg/c3c4c6f8291967b9b3a657fb50249d55.js"></script>


## A Multi-File Gist

    <script src="https://gist.github.com/wcDogg/df863ba6653ba3f7ac07e540c75fadde.js"></script>


## Single File from Multi-File Gist

    <script src="https://gist.github.com/wcDogg/df863ba6653ba3f7ac07e540c75fadde.js?file=test.gist.html"></script>


## Highlight.js

REPO 

https://github.com/highlightjs/highlight.js/

DOWNLOAD 

https://highlightjs.org/download/

CDN

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.6/styles/default.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.6/highlight.min.js"></script>

INIT

    <script src="/path/to/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>


## Sass

Merged this:

https://github.com/primer/github-syntax-light/blob/master/lib/github-light.css   

With this:

https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.6/styles/default.min.css
