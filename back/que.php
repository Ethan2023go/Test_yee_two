<fieldset>
    <legend>新增問卷</legend>
    <form action="" method="post">
        <div style="display: flex;">
            <div>問卷名稱</div>
            <div>
                <input type="text" name="subject">
            </div>
        </div>
        <div class="">
            <div class="" id="opt">
                <input type="text" name="" id="">
                <input type="button" value="更多" onclick="more()">
            </div>

            <div class="ct">
                <input type="submit" value="送出">
                <input type="reset" value="清除">                
            </div>
        </div>
    </form>
</fieldset>

<script>
function more(){
    let opt=`<div id="opt">選項
                <input type="text" name="option">
            </div>`
    $("#opt").before(opt);
}    
</script>