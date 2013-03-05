<?php
class Thumbnailer extends CApplicationComponent
{
	public $wideImagePath; // WideImage relative path from application base path
	public $width;
	public $height;
	
	public function init()
	{
		include	Yii::app()->basePath.DIRECTORY_SEPARATOR.
				$this->wideImagePath.DIRECTORY_SEPARATOR.
				'WideImage.php';
	}
	
	public function generate($imagePath, $thumbnailPath)
	{
		$image = WideImage::load($imagePath);
		$resized = $image->resize($this->width, $this->height, 'outside');
		$cropped = $resized->crop('center', 'center', $this->width, $this->height);
		$cropped->saveToFile($thumbnailPath);
	}
}