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
