@component('mail::message')

<table border="0">
    <tr>
        <table>
            {if $UIVAR.FullName != ''}
            <tr>
                <td><strong>Họ và tên</strong>:</td>
                <td>{$UIVAR.FullName}</td>
            </tr>
            {/if}
            {if $UIVAR.Address != ''}
            <tr>
                <td><strong>Địa chỉ</strong>:</td>
                <td>{$UIVAR.Address}</td>
            </tr>
            {/if}
            {if $UIVAR.Phone != ''}
            <tr>
                <td><strong>Điện thoại</strong>:</td>
                <td>{$UIVAR.Phone}</td>
            </tr>
            {/if}
            {if $UIVAR.Email != ''}
            <tr>
                <td><strong>Email</strong>:</td>
                <td>{$UIVAR.Email}</td>
            </tr>
            {/if}
            {if $UIVAR.Subject != ''}
            <tr>
                <td><strong>Tiêu đề</strong>:</td>
                <td>{$UIVAR.Subject}</td>
            </tr>
            {/if}			
            {if $UIVAR.Content != ''}
            <tr>
                <td><strong>Nội dung liên hệ</strong>:</td> 
                <td>{$UIVAR.Content}</td>
            </tr>
            {/if}
        </table> 
    </tr>
</table>

@endcomponent
