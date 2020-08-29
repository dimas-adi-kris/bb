<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <?php echo '<pre>';
            print_r($this->session->all_userdata()); ?>
            <span>Copyright &copy; Your Website 2020</span>
        </div>
    </div>
</footer>