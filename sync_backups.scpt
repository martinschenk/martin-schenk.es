(*
    AppleScript to Sync Folders

    This script is designed to synchronize the contents of a source folder
    with a target folder on a Mac. Specifically, it checks the source folder
    for files and duplicates any new files to the target folder.

    Property `sourceFolder`: The folder to monitor for new files.
    Property `targetFolder`: The folder where new files will be copied.

    Note: This script does not delete any files in the target folder.

    To run the script i have in /Users/martin/Library/LaunchAgents
    the 'launchd' plist file com.martin.folder_sync.plist

    /Users/martin/Library/LaunchAgents/com.martin.folder_sync_backup_martin-schenk.plist

    To load the service, run (will work also after reboot):
    launchctl load /Users/martin/Library/LaunchAgents/com.martin.folder_sync_backup_martin-schenk.plist

   If you want to make sure everything is set up correctly, you can run the following command to list all the loaded jobs:
   launchctl list | grep com.martin.folder_sync_backup_martin-schenk

   And if you've made changes to the plist file and want to reload it, you can do:
   launchctl bootout user/$(id -u) ~/Library/LaunchAgents/com.martin.folder_sync_backup_martin-schenk.plist
   launchctl bootstrap user/$(id -u) ~/Library/LaunchAgents/com.martin.folder_sync_backup_martin-schenk.plist

   Or the older way to unload and reload:
   launchctl unload ~/Library/LaunchAgents/com.martin.folder_sync_backup_martin-schenk.plist
   launchctl load ~/Library/LaunchAgents/com.martin.folder_sync_backup_martin-schenk.plist

  To stop the service, you can use the launchctl unload command like this:
  launchctl unload ~/Library/LaunchAgents/com.martin.folder_sync_backup_martin-schenk.plist


*)

property sourceFolder : "/Users/martin/Laravel-Projekte/martin-schenk.es/storage/app/Martin Schenk S.L."
property targetFolder : "/Users/martin/Documents/Laravel-Projekte-Backups/martin-schenk.es backups"

-- Main logic to duplicate new files from sourceFolder to targetFolder
tell application "Finder"
    set sourceFiles to every file in folder sourceFolder
    set targetFiles to every file in folder targetFolder

    repeat with aFile in sourceFiles
        set fileName to name of aFile
        set targetFile to targetFolder & ":" & fileName

        if not (exists file targetFile) then
            duplicate aFile to folder targetFolder
        end if
    end repeat
end tell
