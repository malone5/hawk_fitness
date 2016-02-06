<div class="container-fluid">
	<div class="row">
        <div class="col-lg-12 col-sm-12">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>CLass Name</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($classtypelist as $classtype_item): ?>
                            <tr>
                                <td><?php echo  $classtype_item['id']; ?></td>
                                <td><?php echo  $classtype_item['name']; ?></td>
                                <td><?php echo  $classtype_item['description']; ?></td>
                            </tr>
                        <?php endforeach; ?>

                </tbody>
            </table>
        </div>
	</div>
</div>


