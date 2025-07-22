<div class="d-flex align-items-center">
    Trang
</div>

<nav aria-label="Page navigation example">
    <ul class="pagination ms-3">
        <?php
        // Nút Previous
        if ($a > 1) {
            $prev = $a - 1;
            echo '<li class="page-item">
                    <a class="page-link" href="admin/listr/' . $db . '/' . $prev . '" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>';
        } else {
            echo '<li class="page-item disabled">
                    <span class="page-link" aria-hidden="true">&laquo;</span>
                  </li>';
        }

        // Các số trang
        for ($i = 1; $i <= $so; $i++) {
            $active = ($a == $i) ? 'active' : '';
            echo '<li class="page-item ' . $active . '">
                    <a class="page-link" href="admin/listr/' . $db . '/' . $i . '">' . $i . '</a>
                  </li>';
        }

        // Nút Next
        if ($a < $so) {
            $next = $a + 1;
            echo '<li class="page-item">
                    <a class="page-link" href="admin/listr/' . $db . '/' . $next . '" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>';
        } else {
            echo '<li class="page-item disabled">
                    <span class="page-link" aria-hidden="true">&raquo;</span>
                  </li>';
        }
        ?>
    </ul>
</nav>
