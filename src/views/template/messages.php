<?php 
    $errors = [];
    $message= '';
    if($exception){
        $message = [
            'type' => 'error',
            'message' => $exception->getMessage()
        ];
        if(get_class($exception) === 'ValidationException'){
            $errors = $exception->getErrors();
        }
    }

?>

<?php if($message){ ?>
<div role="alert"
class="my-3 alert alert-<?= $message['type'] === 'error' ? 'danger' : 'success'?> " >
    
    <?= $message['message'] ?>
</div>
<?php } ?>