```bash
composer install
vendor/bin/rector process src --dry-run
```

Got result:

```
1) src/Controller/RenameMethodRectorErrorTest.php:41

    ---------- begin diff ----------
@@ @@
 {
     public static function updateIdentifier(User $user): void
     {
-        if (!empty($user->getUsername())) {
+        if (!empty($user->getUserIdentifier())) {
             // something
         }
     }
    ----------- end diff -----------

Applied rules:
 * RenameMethodRector
 * AddParamTypeDeclarationRector
 * AddReturnTypeDeclarationRector
```

Expected result:

No changes
