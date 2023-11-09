<?PHP

class upload
{
    use InputFilter;
    public $filesrc;
    public function __construct()
    {
        $src = "uploads/";
        $file = $_FILES["image"]["name"];
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        $file = "file_" . time() . rand(5, 15) . "." . $ext;
        $tmp_file = $_FILES["image"]["tmp_name"];
        $file_src = $src . $file;
        $allow_extension = array("jpeg", "jpg", "gif", "png", "pdf", "pptx", "webp", "svg");
        $file_ext = explode(".", $file);
        $file_extension = strtolower(end($file_ext));
        if (!empty($_FILES["image"]) && !empty($_FILES["image"]["tmp_name"])) {
            if (in_array($file_extension, $allow_extension)) {
                $this->filesrc = $this->filterString($file_src);
                move_uploaded_file($tmp_file, $file_src);
            } else {
                $_SESSION['message'] = 'File Extension Not Allowed';
            }
        } else {
            $this->filesrc = $this->filterString($_POST["oldfile"]);
        }

    }
}