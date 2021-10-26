
  <footer class="section">
    <div class="center grey-text">Copyright <span class="copyright"></span> Brannon Lee</div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const elems = document.querySelectorAll('.sidenav');
      const instances = M.Sidenav.init(elems, {});
    });
    document.addEventListener('DOMContentLoaded', function() {
      const elems = document.querySelectorAll('select');
      const instances = M.FormSelect.init(elems, {});
    });

    const today = new Date();
    document.querySelector('.copyright').textContent = today.getFullYear();
  </script>
</body>