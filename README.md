yii-image-extension
==================

One simple image extension for Yii framework

It uses [WideImage](http://wideimage.sourceforge.net/) (not bundled) and for now only includes *Thumbnailer* component that allows to generate thumbnails.

Installation
------------

* Download [WideImage](http://wideimage.sourceforge.net/download/).

* Unpack image extension under your extensions directory.

* Configure *Thumbnailer* component:

```
	'thumbnailer'=>array(
		'class'=>'ext.image.Thumbnailer',
		'wideImagePath'=>'../../wideimage', // WideImage relative path from application base path
		'width'=>256,
		'height'=>256,
	),
```

Usage
-----

* Generate a thumbnail:

```
Yii::app()->thumbnailer->generate('path-to/image.jpg', 'path-to/thumbnail.jpg');
```

