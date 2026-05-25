<script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/main.js"></script>

<script>
                        document.getElementById('select-all').addEventListener('click', () => {
                            document.querySelectorAll('.permission-checkbox').forEach(cb => cb.checked = true);
                        });

                        document.getElementById('deselect-all').addEventListener('click', () => {
                            document.querySelectorAll('.permission-checkbox').forEach(cb => cb.checked = false);
                        });
                        </script>