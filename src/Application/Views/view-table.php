<style><?php include $css; ?></style>
<table style="width: 100%;">
    <thead>
        <tr>
            <th style="width: 5%">Применяемость</th>
            <th style="width: 5%">Норма</th>
            <th style="width: 20%">Код ПМУ</th>
            <th style="width: 30%">Наименование ПМУ</th>
            <th style="width: 40%">Даты исследований</th>
        </tr>
    </thead>
    <tbody>
    <?php if ($content !=null) :?>
        <?php foreach ($content as $single) :?>
            <tr>
                <td><?php echo $single['PRIM']; ?></td>
                <td><?php echo $single['KOL']; ?></td>
                <td><?php echo $single['SIMPCODE']; ?></td>
                <td><?php echo $single['NAME']; ?></td>
                <td></td>
            </tr>
        <?php endforeach; ?>
    <?php endif ;?>
    </tbody>
</table>