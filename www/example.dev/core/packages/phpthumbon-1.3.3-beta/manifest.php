<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => '                  GNU LESSER GENERAL PUBLIC LICENSE
                       Version 3, 29 June 2007

 Copyright (C) 2007 Free Software Foundation, Inc. <http://fsf.org/>
 Everyone is permitted to copy and distribute verbatim copies
 of this license document, but changing it is not allowed.


  This version of the GNU Lesser General Public License incorporates
the terms and conditions of version 3 of the GNU General Public
License, supplemented by the additional permissions listed below.

  0. Additional Definitions.

  As used herein, "this License" refers to version 3 of the GNU Lesser
General Public License, and the "GNU GPL" refers to version 3 of the GNU
General Public License.

  "The Library" refers to a covered work governed by this License,
other than an Application or a Combined Work as defined below.

  An "Application" is any work that makes use of an interface provided
by the Library, but which is not otherwise based on the Library.
Defining a subclass of a class defined by the Library is deemed a mode
of using an interface provided by the Library.

  A "Combined Work" is a work produced by combining or linking an
Application with the Library.  The particular version of the Library
with which the Combined Work was made is also called the "Linked
Version".

  The "Minimal Corresponding Source" for a Combined Work means the
Corresponding Source for the Combined Work, excluding any source code
for portions of the Combined Work that, considered in isolation, are
based on the Application, and not on the Linked Version.

  The "Corresponding Application Code" for a Combined Work means the
object code and/or source code for the Application, including any data
and utility programs needed for reproducing the Combined Work from the
Application, but excluding the System Libraries of the Combined Work.

  1. Exception to Section 3 of the GNU GPL.

  You may convey a covered work under sections 3 and 4 of this License
without being bound by section 3 of the GNU GPL.

  2. Conveying Modified Versions.

  If you modify a copy of the Library, and, in your modifications, a
facility refers to a function or data to be supplied by an Application
that uses the facility (other than as an argument passed when the
facility is invoked), then you may convey a copy of the modified
version:

   a) under this License, provided that you make a good faith effort to
   ensure that, in the event an Application does not supply the
   function or data, the facility still operates, and performs
   whatever part of its purpose remains meaningful, or

   b) under the GNU GPL, with none of the additional permissions of
   this License applicable to that copy.

  3. Object Code Incorporating Material from Library Header Files.

  The object code form of an Application may incorporate material from
a header file that is part of the Library.  You may convey such object
code under terms of your choice, provided that, if the incorporated
material is not limited to numerical parameters, data structure
layouts and accessors, or small macros, inline functions and templates
(ten or fewer lines in length), you do both of the following:

   a) Give prominent notice with each copy of the object code that the
   Library is used in it and that the Library and its use are
   covered by this License.

   b) Accompany the object code with a copy of the GNU GPL and this license
   document.

  4. Combined Works.

  You may convey a Combined Work under terms of your choice that,
taken together, effectively do not restrict modification of the
portions of the Library contained in the Combined Work and reverse
engineering for debugging such modifications, if you also do each of
the following:

   a) Give prominent notice with each copy of the Combined Work that
   the Library is used in it and that the Library and its use are
   covered by this License.

   b) Accompany the Combined Work with a copy of the GNU GPL and this license
   document.

   c) For a Combined Work that displays copyright notices during
   execution, include the copyright notice for the Library among
   these notices, as well as a reference directing the user to the
   copies of the GNU GPL and this license document.

   d) Do one of the following:

       0) Convey the Minimal Corresponding Source under the terms of this
       License, and the Corresponding Application Code in a form
       suitable for, and under terms that permit, the user to
       recombine or relink the Application with a modified version of
       the Linked Version to produce a modified Combined Work, in the
       manner specified by section 6 of the GNU GPL for conveying
       Corresponding Source.

       1) Use a suitable shared library mechanism for linking with the
       Library.  A suitable mechanism is one that (a) uses at run time
       a copy of the Library already present on the user\'s computer
       system, and (b) will operate properly with a modified version
       of the Library that is interface-compatible with the Linked
       Version.

   e) Provide Installation Information, but only if you would otherwise
   be required to provide such information under section 6 of the
   GNU GPL, and only to the extent that such information is
   necessary to install and execute a modified version of the
   Combined Work produced by recombining or relinking the
   Application with a modified version of the Linked Version. (If
   you use option 4d0, the Installation Information must accompany
   the Minimal Corresponding Source and Corresponding Application
   Code. If you use option 4d1, you must provide the Installation
   Information in the manner specified by section 6 of the GNU GPL
   for conveying Corresponding Source.)

  5. Combined Libraries.

  You may place library facilities that are a work based on the
Library side by side in a single library together with other library
facilities that are not Applications and are not covered by this
License, and convey such a combined library under terms of your
choice, if you do both of the following:

   a) Accompany the combined library with a copy of the same work based
   on the Library, uncombined with any other library facilities,
   conveyed under the terms of this License.

   b) Give prominent notice with the combined library that part of it
   is a work based on the Library, and explaining where to find the
   accompanying uncombined form of the same work.

  6. Revised Versions of the GNU Lesser General Public License.

  The Free Software Foundation may publish revised and/or new versions
of the GNU Lesser General Public License from time to time. Such new
versions will be similar in spirit to the present version, but may
differ in detail to address new problems or concerns.

  Each version is given a distinguishing version number. If the
Library as you received it specifies that a certain numbered version
of the GNU Lesser General Public License "or any later version"
applies to it, you have the option of following the terms and
conditions either of that published version or of any later version
published by the Free Software Foundation. If the Library as you
received it does not specify a version number of the GNU Lesser
General Public License, you may choose any version of the GNU Lesser
General Public License ever published by the Free Software Foundation.

  If the Library as you received it specifies that a proxy can decide
whether future versions of the GNU Lesser General Public License shall
apply, that proxy\'s public statement of acceptance of any version is
permanent authorization for you to choose that version for the
Library.
',
    'readme' => 'phpThumbOn
=========
Оптимизированный сниппет phpThumbOf под MODX Revolution. Схожый синтаксис, но более быстрая работа. Более подробно смотрите в changelog

Проект на GitHub: https://github.com/gvozdb/phpthumbon
Автор пакета до версии 1.3.0 - Евгений Борисов (Agel_Nash) - http://agel-nash.ru/
',
    'changelog' => 'phpThumbOn 1.3.3-beta (15.12.2017)
=====================================
- Улучшена регулярка определения кириллицы в названии файла
- Исправлена регулярка определения формата файла

phpThumbOn 1.3.2-pl (16.09.2016)
=====================================
- Инициализация класса modPhpThumb для работы с MODX 2.5.1

phpThumbOn 1.3.1-pl (14.01.2015)
=====================================
- Параметр $_config в классе phpThumbOn стал public, для непосредственного доступа к нему из сниппета в параметре "phpthumbon.make_cachename"
- Метод _pathinfo в классе phpThumbOn переписан. Теперь он понимает русские символы более корректнее. Спасибо Василию Наумкину за реализацию данной функции в компоненте ms2Gallery

phpThumbOn 1.3.0 (23.09.2014)
=====================================
- Немецкий и Английский лексикон
- Обновлен пакет для совместимости с MODX 2.3.x

phpThumbOn 1.2.1 (27.12.2013)
=====================================
- Баг со сбросом информации об объекте при ответе процессора
- Исправление проблемы с абсолютными путями

phpThumbOn 1.2.0 (26.12.2013)
=====================================
- Удаление ранее созданных превью при повторном вызове сниппета с другими параметрами
- Избавление от пустоты на выходе, если скрипт не смог создать превьюху
- Кеширование сжатых noimage картинок
- Возможность обработки нескольких картинок очереди за 1 запуск процессора
- Исправлено логирование проблемных картинок
- Кастомные имена превьюх

phpThumbOn 1.1.0 (06.12.2013)
=====================================
- Добавлена поддержка очереди сжатия

phpThumbOn 1.0.2 (16.09.2013)
=====================================
- Исправлена работа в режиме AJAX

phpThumbOn 1.0.1 (25.08.2013)
=====================================
- Исправлено некорректное восприятие параметра input с начальным слешем

phpThumbOn 1.0.0 (02.08.2013)
=====================================
- Имя файла превьюхи максимально вычищенно от непонятных последовательностей символов
- Картинки семантично раскладываются по папкам в соответствии с оригинальными картинками
- Удалены постоянные проверки и отчистки всего кеша
- Отключена поддержка AWS Amazon
- Добавлен ряд параметров отвечающих за качество и тип превьюхи по умолчанию
- Код сниппета оптимизирован под множественные вызовы
',
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '5de983d9788c7e343fb7dd19183d9260',
      'native_key' => 'phpthumbon',
      'filename' => 'modNamespace/0fad2ba00ed3875b2252c0f6d6572401.vehicle',
      'namespace' => 'phpthumbon',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSnippet',
      'guid' => '27e321c157deab2f5761109b305206b1',
      'native_key' => NULL,
      'filename' => 'modSnippet/666050303d844953271eef1b0e48ae2e.vehicle',
      'namespace' => 'phpthumbon',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'caa5e86e1a8a975fa6871f23e6a7b756',
      'native_key' => 'phpthumbon.images_dir',
      'filename' => 'modSystemSetting/d0b32ad91e0905b60bdb5cb0e449b3d7.vehicle',
      'namespace' => 'phpthumbon',
    ),
    3 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'd00b900cece67b6d358db4e8f0ddf07f',
      'native_key' => 'phpthumbon.quality',
      'filename' => 'modSystemSetting/a87350f45810f3f734c2828eb796dd26.vehicle',
      'namespace' => 'phpthumbon',
    ),
    4 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'b27e40a62765ed808336e4bd229e1115',
      'native_key' => 'phpthumbon.cache_dir',
      'filename' => 'modSystemSetting/147cbe988a05b7aa960f62385fa654a1.vehicle',
      'namespace' => 'phpthumbon',
    ),
    5 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '6bbff758466d5d3da62af53acd807f48',
      'native_key' => 'phpthumbon.ext',
      'filename' => 'modSystemSetting/4b0a03e1918a8e0b24919eb90b5ba3ae.vehicle',
      'namespace' => 'phpthumbon',
    ),
    6 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'dcf7bb1cf5daf7148d65d096e5bb46d6',
      'native_key' => 'phpthumbon.noimage',
      'filename' => 'modSystemSetting/316afd616111e93d90643a4bfbca80aa.vehicle',
      'namespace' => 'phpthumbon',
    ),
    7 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'dec97a6b066f5e1c1f9f1f4db7ae103a',
      'native_key' => 'phpthumbon.queue',
      'filename' => 'modSystemSetting/20147a3e9e8feb19b11ca6f33fbc4002.vehicle',
      'namespace' => 'phpthumbon',
    ),
    8 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'ac0a7ec2389fc02015dc35358989d1b4',
      'native_key' => 'phpthumbon.error_mode',
      'filename' => 'modSystemSetting/209f44a3345bd5f06b22c7065c60a7ce.vehicle',
      'namespace' => 'phpthumbon',
    ),
    9 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'e8b98d901b6207d20ab40d145f04e387',
      'native_key' => 'phpthumbon.noimage_cache',
      'filename' => 'modSystemSetting/9d58e4d825b527d3c0d76fc4516ef342.vehicle',
      'namespace' => 'phpthumbon',
    ),
    10 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => 'a02bb8e87c6f26304c95f94c93ad598f',
      'native_key' => 'phpthumbon.make_cachename',
      'filename' => 'modSystemSetting/f51d23d1c65bb2e38b61b92d5ab7f08e.vehicle',
      'namespace' => 'phpthumbon',
    ),
  ),
);