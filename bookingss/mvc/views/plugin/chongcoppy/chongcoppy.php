<script type="text/javascript">
      function nocontext(e) {
        var clickedTag = (e==null) ? event.srcElement.tagName : e.target.tagName;
        if (clickedTag == "IMG")
          return false;
      }
      document.oncontextmenu = nocontext;
    </script>

<style>
     img {
      -webkit-user-drag: none;
      user-drag: none;
      -webkit-touch-callout: none;
    }
</style>