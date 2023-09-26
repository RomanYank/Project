<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
?>
<div class="button-container">
    <?= Html::a('Добавить запись', ['site/create'], ['class' => 'button-add-item']) ?>
    <?= Html::a('Экспортировать', ['site/generate-report'], ['class' => 'export-button-items']) ?>
    <?php $form = ActiveForm::begin(['method' => 'get', 'action' => ['filter']]); ?>
        <label for="status">Фильтр по статусу:</label>
        <select name="status" id="status">
            <option value="Активен">Активен</option>
            <option value="Неактивен">Неактивен</option>
            <option value="all">Все</option>
        </select>
        <?= Html::submitButton('Фильтровать', ['class' => 'btn btn-success']) ?>
    <?php ActiveForm::end(); ?>
</div>
<table class="table-employees">
    <thead>
        <tr>
            <td>ID</td>
            <td>Имя</td>
            <td>Фамилия</td>
            <td>Телефон</td>
            <td>Должность</td>
            <td>Статус</td>
            <td>Заработная плата</td>
            <td>Просмотр</td>
            <td>Изменить</td>
            <td>Удалить</td>
        </tr>
    </thead>
    <tbody>
<?php foreach($rows as $row) {
            echo '<tr>
                <td>'.$row["id_employees"].'</td>
                <td>'.$row["name"].'</td>
                <td>'.$row["surname"].'</td>
                <td>'.$row["phone"].'</td>
                <td>'.$row["post"].'</td>
                <td>'.$row["status"].'</td>
                <td>'.$row["salary"].'</td>
                <td>
                    <a href="'.Yii::$app->urlManager->createUrl(['site/view', 'id' => $row["id_employees"]]).'">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" width="800px" height="800px" viewBox="-3.5 0 32 32" version="1.1">
                        <path d="M12.406 13.844c1.188 0 2.156 0.969 2.156 2.156s-0.969 2.125-2.156 2.125-2.125-0.938-2.125-2.125 0.938-2.156 2.125-2.156zM12.406 8.531c7.063 0 12.156 6.625 12.156 6.625 0.344 0.438 0.344 1.219 0 1.656 0 0-5.094 6.625-12.156 6.625s-12.156-6.625-12.156-6.625c-0.344-0.438-0.344-1.219 0-1.656 0 0 5.094-6.625 12.156-6.625zM12.406 21.344c2.938 0 5.344-2.406 5.344-5.344s-2.406-5.344-5.344-5.344-5.344 2.406-5.344 5.344 2.406 5.344 5.344 5.344z"/>
                        </svg>
                    </a>
                </td>
                <td>
                    <a href="'.Yii::$app->urlManager->createUrl(['site/edit', 'id' => $row["id_employees"]]).'">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" width="800px" height="800px" viewBox="0 0 32 32" version="1.1">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                            <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-516.000000, -99.000000)" fill="#000000">
                                <path d="M527.786,122.02 L522.414,125.273 C521.925,125.501 521.485,125.029 521.713,124.571 L524.965,119.195 L527.786,122.02 L527.786,122.02 Z M537.239,106.222 L540.776,109.712 L529.536,120.959 C528.22,119.641 526.397,117.817 526.024,117.444 L537.239,106.222 L537.239,106.222 Z M540.776,102.683 C541.164,102.294 541.793,102.294 542.182,102.683 L544.289,104.791 C544.677,105.18 544.677,105.809 544.289,106.197 L542.182,108.306 L538.719,104.74 L540.776,102.683 L540.776,102.683 Z M524.11,117.068 L519.81,125.773 C519.449,126.754 520.233,127.632 521.213,127.177 L529.912,122.874 C530.287,122.801 530.651,122.655 530.941,122.365 L546.396,106.899 C547.172,106.124 547.172,104.864 546.396,104.088 L542.884,100.573 C542.107,99.797 540.85,99.797 540.074,100.573 L524.619,116.038 C524.328,116.329 524.184,116.693 524.11,117.068 L524.11,117.068 Z M546,111 L546,127 C546,128.099 544.914,129.012 543.817,129.012 L519.974,129.012 C518.877,129.012 517.987,128.122 517.987,127.023 L517.987,103.165 C517.987,102.066 518.902,101 520,101 L536,101 L536,99 L520,99 C517.806,99 516,100.969 516,103.165 L516,127.023 C516,129.22 517.779,131 519.974,131 L543.817,131 C546.012,131 548,129.196 548,127 L548,111 L546,111 L546,111 Z" id="new" sketch:type="MSShapeGroup">
                                </path>
                            </g>
                        </g>
                        </svg>
                    </a>
                </td>
                <td>
                    <a href="'.Yii::$app->urlManager->createUrl(['site/delete', 'id' => $row["id_employees"]]).'">
                        <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24" fill="none">
                            <path d="M18 6L17.1991 18.0129C17.129 19.065 17.0939 19.5911 16.8667 19.99C16.6666 20.3412 16.3648 20.6235 16.0011 20.7998C15.588 21 15.0607 21 14.0062 21H9.99377C8.93927 21 8.41202 21 7.99889 20.7998C7.63517 20.6235 7.33339 20.3412 7.13332 19.99C6.90607 19.5911 6.871 19.065 6.80086 18.0129L6 6M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6M14 10V17M10 10V17" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </td>
            </tr>';
}; ?>
    </tbody>
</table>
