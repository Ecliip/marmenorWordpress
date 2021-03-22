    ### Solution for "[Intervention] Unable to preventDefault inside passive event listener due to target being treated as passive
* assets/js/SmoothScroll.js
<https://github.com/rochal/jQuery-slimScroll/issues/319>
```js
// line 357

scrollArray(overflowing, deltaX, deltaY);
// event.preventDefault();  ORIGINAL LINE
if (e.preventDefault && !releaseScroll) {  e.target.blur(); }  // THIS LINE FIXES A BUG
scheduleClearCache();
```


### Good solution for Gallery
<https://wordpress.stackexchange.com/questions/124169/how-to-paginate-attachments-in-a-secondary-query-as-gallery>
<https://gist.github.com/radiovisual/9070765>
*A tutorial:*
<https://code.tutsplus.com/series/advanced-use-of-attachments-in-wordpress--cms-645>